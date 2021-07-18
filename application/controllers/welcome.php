<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller
{

	public function __construct() {
        parent::__construct();
        $this->load->model('my_controller_model');
		$this->is_logged_in();
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
		$this->output->set_header("Pragma: no-cache");
    }
	
	function is_logged_in()
	{
		if (!$this->tank_auth->is_logged_in()) {									
			redirect('auth/login','refresh');
		}
	}
	
	public function index()
	{
		$this->load->view('index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */