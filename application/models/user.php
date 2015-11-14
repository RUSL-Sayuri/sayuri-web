<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 7/30/15
 * Time: 11:31 AM
 */
class user extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_user_login_info($username)
    {
        $this->db->select('id, password, user_type');
        $this->db->from('user');
        $this->db->where('username', $username);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            //No username found
            return NULL;
        } else {
            //username found
            $result = $query->result()[0];
            $user_info = array(
                'id' => $result->id,
                'password' => $result->password,
                'user_type' => $result->user_type
            );
            return $user_info;
        }
    }

    public function get_user($id)
    {
        $this->db->from('user');
        $this->db->where('id', $id);
        return $this->db->get()->result()[0];
    }

    public function get_autism_center($id)
    {
        $this->db->select('user.id, fname, lname, addressline1, addressline2, city, profile_picture_url, contact_person, description, web_url');
        $this->db->from('school');
        $this->db->join('user', 'school.id=user.id', 'inner');
        $this->db->where('user.id', $id);
        return $this->db->get()->result()[0];
    }

    public function get_autism_centers()
    {
        $this->db->select('user.id, fname, lname, addressline1, addressline2, city, profile_picture_url, contact_person, description, web_url');
        $this->db->from('school');
        $this->db->join('user', 'school.id=user.id', 'inner');
        $this->db->where('user_type', 'school');
        $this->db->where('deleted', 0);
        return $this->db->get()->result();
    }

    public function accept_reject_request($id, $user_type, $accept = true)
    {
        if ($accept) {
            $data = array('accepted' => 1);
            $this->db->where('id', $id);
            $this->db->update($user_type, $data);
        } else {
            $data = array('deleted' => 1);
            $this->db->where('id', $id);
            $this->db->update('user', $data);
        }
    }


    public function get_user_list($type = '')
    {
        $this->db->from('user');
        if ($type != '') {
            $this->db->where('user_type', $type);
        }
        return $this->db->get()->result();
    }

    /**
     * Returns the not deleted users
     */
    public function get_active_user_list()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user.deleted', 0);
        return $this->db->get()->result();
    }

    public function delete_user($id)
    {
        $data = array('deleted' => 1);
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function update_user($id, $data, $table = 'user')
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }

    public function get_consultants()
    {
        $this->db->select('user.id, consultant.title, consultant.work_address, consultant.description, consultant.speazlized_area, user.fname, user.lname, user.addressline1, user.addressline2, user.city, user.province, user.username, user.profile_picture_url');
        $this->db->from('consultant');
        $this->db->join('user', 'consultant.id = user.id', 'inner');
        $this->db->where('user_type',"consultant");
        $this->db->where('deleted',0);
        return $this->db->get()->result();
    }

    public function get_my_consultants($parent_id){
        $this->db->select('user.id, consultant.title, consultant.work_address, consultant.description, consultant.speazlized_area, user.fname, user.lname, user.addressline1, user.addressline2, user.city, user.province, user.username, user.profile_picture_url');
        $this->db->from('consultant');
        $this->db->join('user', 'consultant.id = user.id', 'inner');
        $this->db->join('parent_consultant', 'consultant.id = sayuri_parent_consultant.c_id', 'inner');
        $this->db->where('p_id',$parent_id);
        return $this->db->get()->result();
    }

}