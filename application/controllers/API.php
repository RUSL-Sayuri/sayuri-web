<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class API extends CI_Controller
{

    public function login()
    {
        $this->load->modal('user');

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user_info = $this->user->get_user_login_info($username);

        if ($user_info->password == $password) {
            $user_obj = $this->user->get_user($user_info->id);
            header('Content-Type: application/json');
            echo json_encode($user_obj);
        }

    }

    public function add_score()
    {
        $this->load->modal('game');

        $user_id = $this->input->post('user_id');
        $game_id = $this->input->post('game_id');
        $level = $this->input->post('level');
        $score = $this->input->post('score');

        $this->game->insert_score($user_id, $game_id, $level, $score);
        echo json_encode(array('Success'));


    }
}

/* End of file API.php */
/* Location: ./application/controllers/API.php */