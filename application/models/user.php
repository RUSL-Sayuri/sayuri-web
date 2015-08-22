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
        $this->db->where('user.id',$id);
        return $this->db->get()->result()[0];
    }

    public function get_autism_centers()
    {
        $this->db->select('user.id, fname, lname, addressline1, addressline2, city, profile_picture_url, contact_person, description, web_url');
        $this->db->from('school');
        $this->db->join('user', 'school.id=user.id', 'inner');
        $this->db->where('user_type','school');
        $this->db->where('deleted',0);
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

    public function registration_request_count()
    {
        $this->db->select('id');
        $this->db->from('donor');
        $this->db->where('accepted', 0);
        $donor_count = $this->db->count_all_results();
        $this->db->select('id');
        $this->db->from('student');
        $this->db->where('accepted', 0);
        $student_count = $this->db->count_all_results();
        return $donor_count + $student_count;
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


    public function register_CAD_user($user_data)
    {
        $this->db->insert('user', $user_data);
        return $this->db->insert_id();
    }

    public function get_registration_requests()
    {
        $this->db->select('user.id, first_name, last_name, user_type, school.name AS title');
        $this->db->from('student');
        $this->db->join('user', 'student.id=user.id', 'inner');
        $this->db->join('school', 'student.school_id=school.id', 'inner');
        $this->db->where('student.accepted', 0);
        $this->db->where('user.deleted', 0);
        $students = $this->db->get()->result();

        $this->db->select('user.id, first_name, last_name, user_type, title');
        $this->db->from('donor');
        $this->db->join('user', 'donor.id=user.id', 'inner');
        $this->db->where('donor.accepted', 0);
        $this->db->where('user.deleted', 0);
        $donors = $this->db->get()->result();

        return array_merge($students, $donors);
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

}