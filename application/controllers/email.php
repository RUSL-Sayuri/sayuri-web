<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller
{
    public function opened()
    {
        $this->load->view('email-opened');
    }

    public function send(){
        $to = $this->input->post('to');
        print_r($to);
    }



}

/* End of file email.php */
/* Location: ./application/controllers/email.php */