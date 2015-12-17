<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Consultants extends CI_Controller
{
    var $USER_OBJ = false;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('consultant');

        $this->load->model('user');

        $this->USER_OBJ = $this->session->userdata('user');

    }


    public function dashboard()
    {


        $this->load->view('consultant_dashboard');
    }

    public function manage_peers()
    {
        $consultants = $this->consultant->get_consultants();
        $view_data = array('consultants' => $consultants);
        $this->load->view('consultant_manage_peers', $view_data);

    }

    public function view_performance()
    {
        $this->load->model('game');
        $score_data = array();
        $parent_ids = $this->consultant->get_parents($this->USER_OBJ->id);

        foreach ($parent_ids as $parent) {
            $parent_overall_scores = $this->game->get_overall_scores($parent->p_id);
            $i = 0;
            $temp_sum = 0;
            foreach ($parent_overall_scores as $score) {
                $temp_sum += $score->score;
                $i++;
            }
            $temp_array = array('user' => $this->user->get_user($parent->p_id), 'score' => ($temp_sum / $i));
            array_push($score_data, $temp_array);
        }

        $view_data = array('score_data' => $score_data);

//        header('Content-Type: application/json');
//        echo json_encode($view_data);
//        die();
        $this->load->view('consultant_children_performance', $view_data);

    }
}

/* End of file Consultants.php */
/* Location: ./application/controllers/Consultants.php */