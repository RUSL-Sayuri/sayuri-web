<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/14/15
 * Time: 12:02 PM
 */
class Parents extends CI_Controller
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

    /**
     * Loads the Parent Dashboard
     */
    public function dashboard()
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
            //The Game Score finding Algorithm
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

    /**
     * View the child's performance
     */
    public function view_performance()
    {

        $this->load->helper('morris');

        $this->load->model('game');
        $this->load->model('message');

        $overall_game_score = array();

        $game_categories = $this->game->get_game_categories();
        foreach ($game_categories as $game_category) {
            $overall_game_score[$game_category->category] = $this->game->get_scores($game_category->game_id, $this->USER_OBJ->id);
        }

        $smart_inbox = $this->message->get_inbox($this->USER_OBJ->id, 5);

        $view_data = array(
            'overall_game_score' => $overall_game_score,
            'smart_inbox' => $smart_inbox
        );

        $this->load->view('parent_view_performance', $view_data);

    }

    /**
     * View the Manage Consultants
     */
    public function manage_consultants()
    {
        $consultants = $this->user->get_consultants();
        $my_consultants = $this->user->get_my_consultants($this->USER_OBJ->id);
        $view_data = array(
            'consultants'=>$consultants,
            'my_consultants' =>$my_consultants
        );
        $this->load->view('parent_manage_consultants',$view_data);
    }

}