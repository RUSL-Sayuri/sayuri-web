<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class message extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_inbox($to, $limit = null)
    {
        $this->db->select('fname, lname, message.id, to, subject, body, date_time, read');
        $this->db->from('message');
        $this->db->join('user', 'message.from=user.id', 'inner');
        $this->db->where('`to`', $to);
        $this->db->where('message.deleted', 0);
        if ($limit != null) {
            $this->db->limit($limit);
        }
        $this->db->order_by('date_time', 'DESC');
        return $this->db->get()->result();
    }

    public function get_inbox_count($to, $unread = true)
    {
        $this->db->from('message');
        $this->db->where('`to`', $to);
        if ($unread) {
            $this->db->where('read', 0);
        }
        return $this->db->count_all_results();
    }

    public function get_message($id)
    {
        $this->db->select('from, id, body, subject, read, DATE(date_time) as date, TIME(date_time) as time');
        $this->db->from('message');
        $this->db->where('id', $id);
        return $this->db->get()->result()[0];
    }

    public function mark_read($id)
    {
        $this->db->where('id', $id);
        $this->db->update('message', array('read' => 1));

    }

    public function mark_unread($id)
    {
        $this->db->where('id', $id);
        $this->db->update('message', array('read' => 0));
    }

    public function save_message($from, $to, $subject, $body)
    {
        $insert_data = array(
            'to' => $to,
            'from' => $from,
            'subject' => $subject,
            'body' => $body
        );
        $this->db->insert('message', $insert_data);

    }

    public function get_sentbox($from)
    {
        $this->db->select('fname, lname, message.id, to, subject, body, DATE(date_time) as date');
        $this->db->from('message');
        $this->db->join('user', 'message.to=user.id', 'inner');
        $this->db->where('`from`', $from);
        $this->db->order_by('date_time', 'DESC');


        return $this->db->get()->result();
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('message');
    }
}

/* End of file message.php */
/* Location: ./application/models/message.php */