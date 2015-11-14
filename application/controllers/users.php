<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class users extends CI_Controller
{
    var $USER_OBJ = false;

    function __construct()
    {
        parent::__construct();

        $this->load->model('user');

        $this->USER_OBJ = $this->session->userdata('user');

    }

    public function index()
    {
        if ($this->USER_OBJ != false) {
            //session exists
            redirect('/dashboard');

        } else {
            //session expired or DNE
            $this->load->view('login');
        }
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));

        $user_info = $this->user->get_user_login_info($username);


        if ($user_info == null) {
            //user DNE
            $this->load->view('login', array('login_fail' => true));
        } elseif ($password == $user_info['password']) {
            //Login Success
            $user_obj = $this->user->get_user($user_info['id']);
            $this->session->set_userdata('user', $user_obj);
            redirect('/dashboard');
        } else {
            //Login Fail
            $this->load->view('login', array('login_fail' => true));
        }

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');

    }

    public function dashboard()
    {
        if (!isset($this->USER_OBJ->id)) {
            redirect('/');
        }

        switch ($this->USER_OBJ->user_type) {
            case 'parent':
                $this->parent_dashboard($this->USER_OBJ);
        }

    }
    /**
     * Loads the Parent Dashboard
     */
    private function parent_dashboard()
    {
        redirect("/Parents/dashboard");
    }


    public function view_autism_centers()
    {
        $autism_centers = $this->user->get_autism_centers();
        $this->load->view('autism_centers', array('autism_centers' => $autism_centers));
    }

    public function autism_center($id)
    {
        $autism_center = $this->user->get_autism_center($id);
        echo json_encode($autism_center);
    }

    public function manage_users($success = 0)
    {
        if (isset($this->USER_OBJ->id)) {
            $view_data = array(
                'user' => $this->USER_OBJ,
                'position' => 'Administrator',
                'users' => $this->user->get_active_user_list(),
                'success' => $success,
            );
            $this->load->view('admin/admin_manage_users', $view_data);

        } else {
            redirect('/');
        }
    }


    public function delete_user()
    {
        $id = $this->input->post('id');
        $password = sha1($this->input->post('password'));
        if (isset($this->USER_OBJ->id)) {
            if ($password == $this->USER_OBJ->password) {
                if ($this->USER_OBJ->user_type == 'admin') {
                    $this->user->delete_user($id);
                    redirect('/users/manage_users/1');
                } else {
                    $this->load->view('401');
                }
            } else {
                redirect('/users/manage_users/2');
            }
        } else {
            redirect('/');
        }
    }




}

/* End of file users.php */
/* Location: ./application/controllers/users.php */