<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class game extends CI_Model
{

    public function get_score_history($user_id, $game_id)
    {
        $this->db->select("date_time AS `date`, level, score");
        $this->db->from('play');
        $this->db->where('p_id', $user_id);
        $this->db->where('game_id', $game_id);
        return $this->db->get()->result();
    }

    public function get_latest_score($user_id, $game_id)
    {
        $this->db->select("date_time AS `date`, level, score");
        $this->db->from('play');
        $this->db->where('p_id', $user_id);
        $this->db->where('game_id', $game_id);
        $this->db->order_by('date_time','DESC');
        $this->db->limit(1);
        return $this->db->get()->result()[0];
    }

    public function get_game_categories()
    {
        $this->db->select('category');
        $this->db->from('game');
        return $this->db->get()->result();
    }

    public function get_games_in_a_category($category)
    {
        $this->db->from('game');
        $this->db->where('category', $category);
        return $this->db->get()->result();
    }

}

/* End of file game.php */
/* Location: ./application/models/game.php */