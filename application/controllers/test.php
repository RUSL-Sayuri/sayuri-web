<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function index(){
        $this->test2('dashboard');
    }

    public function test2($view)
    {
        $this->load->view($view);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */