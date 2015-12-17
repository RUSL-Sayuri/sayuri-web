<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class consultant extends CI_Model
{
    public function get_consultants()
    {

        $this->db->select('user.id, user.fname, user.lname, user.addressline1, user.addressline2, user.city, user.province, user.username, consultant.title, consultant.work_address, consultant.description, consultant.speazlized_area');
        $this->db->from('user');
        $this->db->join('consultant', 'user.id = consultant.id', 'inner');
        $this->db->where('user_type', 'consultant');
        return $this->db->get()->result();

    }

    public function get_consultant($id)
    {
        $this->db->select('user.id, user.fname, user.lname, user.addressline1, user.addressline2, user.city, user.province, user.username, consultant.title, consultant.work_address, consultant.description, consultant.speazlized_area');
        $this->db->from('user');
        $this->db->join('consultant', 'user.id = consultant.id', 'inner');
        $this->db->where('user.id', $id);
        return $this->db->get()->result()[0];
    }

    public function get_parents($consultant_id)
    {
        $this->db->from($this->db->dbprefix('parent_consultant'));
        $this->db->where('c_id', $consultant_id);
        return $this->db->get()->result();

    }
}

/* End of file consultant.php */
/* Location: ./application/models/consultant.php */