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

        //$remember = $this->input->post('remember');
        // Change the session timeout for the remember me option
        // Value return from the remember is "remember"

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
        $this->load->helper('morris');

        $this->load->model('game');
        $this->load->model('message');

        $game_categories = $this->game->get_game_categories();
        $game_latest_scores = array();
        $game_scores = array();
        foreach ($game_categories as $game_category) {
            $games_in_category = $this->game->get_games_in_a_category($game_category->category);
            foreach ($games_in_category as $game_in_category) {
                $game_scores[$game_category->category] = $this->game->get_score_history($this->USER_OBJ->id, $game_in_category->game_id);
                $game_latest_scores[$game_category->category] = $this->game->get_latest_score($this->USER_OBJ->id, $game_in_category->game_id);
            }
        }
        $overall_game_score = array();
        $play_dates = $this->game->get_play_dates($this->USER_OBJ->id);
        foreach ($play_dates as $date) {
            $game_score = 0;
            $count = 0;
            foreach ($game_scores as $game_category) {
                foreach ($game_category as $games_in_category) {
                    if ($date->date == $games_in_category->date) {
//                        $game_score += $games_in_category->score * $games_in_category->level;
                        $game_score += $games_in_category->score;
                        $count++;
                    }
                }
            }
            $overall_game_score[$date->date] = $game_score / $count;
        }


        $smart_inbox = $this->message->get_inbox($this->USER_OBJ->id, 5);

        $view_data = array(
            'overall_game_score' => $overall_game_score,
            'game_latest_scores' => $game_latest_scores,
            'smart_inbox' => $smart_inbox
        );
        $this->load->view('dashboard', $view_data);
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


    public function get_single_user()
    {
        $user_id = $this->input->post('user_id');
        $user_type = $this->input->post('user_type');
        $user = array();
        switch ($user_type) {
            case 'donor':
                $user = $this->user->get_donor($user_id);
                break;
            case 'student':
                $user = $this->user->get_student($user_id);
                break;
            case 'cad':
                $user = $this->user->get_cad_user($user_id);
                break;
        }
        echo json_encode($user);
    }

    public function accept_reject_request($id, $type)
    {
        switch ($type) {
            case 'accept':
                $this->user->accept_reject_request($id, $this->user->get_user($id)->user_type);
                redirect('/users/registration_request/1');
                break;
            case 'reject':
                $this->user->accept_reject_request($id, $this->user->get_user($id)->user_type, false);
                redirect('/users/registration_request/1');
                break;
            default:
                redirect('/users/registration_request/0');

        }
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

    public function update_cad_user()
    {
        echo $id = $this->input->post('id');
        $data = array('position' => $this->input->post('position'));
        $this->user->update_user($id, $data, 'cadteam');
        redirect('/users/manage_users/3');

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

    private function send_email($to, $subject, $body)
    {
        $this->load->library('email');

        $this->email->from('Colour A Dream Web Portal');
        $this->email->reply_to('info@imcds.org', 'IMCD');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($body);
        $this->email->set_mailtype('html');
        if ($this->email->send() == 1) {
            return true;
        } else {
            echo $this->email->print_debugger();
        }
    }
}

/* End of file users.php */
/* Location: ./application/controllers/users.php */