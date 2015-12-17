<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class API extends CI_Controller
{

    public function login()
    {

        $this->load->model('user');

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user_info = $this->user->get_user_login_info($username);

        if ($user_info == null) {
            //user DNE
            $view_data = array('result' => 'Login Failed');
        } elseif (sha1($password) == $user_info['password']) {
            //Login Success
            $view_data = $this->user->get_user($user_info['id']);
        } else {
            $view_data = array('result' => 'Login Failed');
        }

        $this->load->view('json', array('data' => $view_data));

    }

    public function consultant($id)
    {
        $this->load->model('consultant');
        $view_data = $this->consultant->get_consultant($id);
        $this->load->view('json', array('data' => $view_data));
    }


}

/* End of file API.php */
/* Location: ./application/controllers/API.php */