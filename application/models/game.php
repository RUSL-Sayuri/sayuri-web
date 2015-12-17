<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class game extends CI_Model
{

    public function get_score_history($user_id, $game_id)
    {
        $this->db->select("DATE(date_time) AS `date`, level, score");
        $this->db->from('play');
        $this->db->where('p_id', $user_id);
        $this->db->where('game_id', $game_id);
        return $this->db->get()->result();
    }

    public function get_play_dates($user_id)
    {
        $this->db->select('date(date_time) as date');
        $this->db->from('play');
        $this->db->where('p_id', $user_id);
        $this->db->group_by('date');
        return $this->db->get()->result();
    }

    public function get_latest_score($user_id, $game_id)
    {
        $this->db->select("DATE(date_time) AS `date`, level, score");
        $this->db->from('play');
        $this->db->where('p_id', $user_id);
        $this->db->where('game_id', $game_id);
        $this->db->order_by('date_time', 'DESC');
        $this->db->limit(1);
        return $this->db->get()->result()[0];
    }

    public function get_game_categories()
    {
        $this->db->select('game_id, category');
        $this->db->from('game');
        return $this->db->get()->result();
    }

    public function get_games_in_a_category($category)
    {
        $this->db->from('game');
        $this->db->where('category', $category);
        return $this->db->get()->result();
    }

    public function get_scores($game_id, $user_id)
    {
        $this->db->select('p_id, date_time, score, level, play.game_id');
        $this->db->from('play');
        $this->db->join('game', 'play.game_id = game.game_id', 'inner');
        $this->db->where('p_id', $user_id);
        $this->db->where('play.game_id', $game_id);
        return $this->db->get()->result();
    }

    public function insert_score($p_id, $game_id, $level, $score)
    {
        $this->db->insert('play', array('p_id' => $p_id, 'game_id' => $game_id, 'level' => $level, 'score' => $score));
    }

    public function get_overall_scores($user_id)
    {
        $this->db->select('game_id, SUM(score * level) AS score');
        $this->db->from('play');
        $this->db->group_by('game_id');
        $this->db->where('p_id', $user_id);
        return $this->db->get()->result();
    }

    public function get_played_p_id()
    {
        $this->db->from('play');
        $this->db->group_by('p_id');
        return $this->db->get()->result();
    }
}

/* End of file game.php */
/* Location: ./application/models/game.php */