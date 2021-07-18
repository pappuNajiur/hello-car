<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class My_controller extends CI_Controller
{

public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
		//$this->is_logged_in();
		//$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
		//$this->output->set_header("Pragma: no-cache");
    }
	//<!--function is_logged_in()
	//{
		//if (!$this->tank_auth->is_logged_in()) {									
			//redirect('auth/login','refresh');
		//}
	
	public function index()
	{
		$rdr = $this->input->get('rdr');
		if($rdr != ''){
			if ($this->tank_auth->is_logged_in()) {									
				//redirect('auth/login','refresh');
				redirect('admin_controller/putorder/'.$rdr);
			}
		}
		$data['rdr'] = $rdr;
		$this->load->view('front/index',$data);
	}
	
	
	public function aboutus()
	{
		$this->load->view('front/about');
	}






public function viewaboutus()

	{

		$data['h']=$this->Admin_model->viewaboutus();  
         //return the data in view  
         $this->load->view('front/about', $data);  

	}



	public function contact()
	{
		$this->load->view('front/contacts');
	}

	public function allcars()
	{
		
		$brand_id = $this->uri->segment(3);
		$data['viewcars']=$this->User_model->fetchcars();
		if($brand_id){
			$data['viewcars']=$this->User_model->fetchcars($brand_id);
		}
		
		$data['brand_info'] = $this->User_model->get_brand2();
		
	/* 	$this->load->library('pagination');
		
		$config['base_url'] = base_url().'my_controller/allcars/';
		$config['total_rows'] = $this->User_model->count_cars();
		$config['per_page'] = 6;
		$config['uri_segment'] = 3;

		$this->pagination->initialize($config);

		 */
		//$vehicle_id=$this->uri->segment(3);
		//$data['vehicle_id'] = $vehicle_id;
		//$data['viewcars']=$this->User_model->fetchcar($this->uri->segment(3),$config['per_page']);
		$this->load->view('front/cars',$data);
	}
	
	function sent_email(){
		
		$this->load->library('email');
		$this->email->from($this->input->post('email') ,$this->input->post('name'));
		//$this->email->reply_to('');
		$this->email->to('anastaltola@gmail.com');
		$this->email->subject($this->input->post('subject'));
		$this->email->message($this->input->post('message'));
		//$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		
		
		
		if($this->email->send()){
			echo json_encode('ok');
		}
		else{
			echo 'error';
		}
	}

	public function services()
	{
		$this->load->view('front/services');
	}



	public function ordercar()
	{
		$brand_id = $this->uri->segment(3);
		$data['viewcars']=$this->User_model->fetchcars();
		if($brand_id){
			$data['viewcars']=$this->User_model->fetchcars($brand_id);
		}
		
		$data['brand_info'] = $this->User_model->get_brand();
		
		
		$this->load->view('carorder',$data);

		
		//$this->load->library('pagination');
		
		//$config['base_url'] = base_url().'my_controller/ordercar/';$config['total_rows'] = $this->User_model->count_cars();
		//$config['per_page'] = 5;$config['uri_segment'] = 3;
		

		//$this->pagination->initialize($config);

		
		
		
		///$vehicle_id=$this->uri->segment(3);
		///$data['vehicle_id'] = $vehicle_id;
		//$data['viewcars']=$this->User_model->fetchcars($this->uri->segment(3),$config['per_page']);
		//$this->load->view('carorder',$data);
	
	}


	public function viewdrivercars()
	{
		$user_id=$this->tank_auth->get_user_id();
		$data['drivercar']=$this->User_model->drivercar($user_id);
		$this->load->view('view_drivercar',$data);
	}
	public function pappu()
	{
		$this->load->view('pappu');
	}
	public function rabeya()
	{
		$this->load->view('rabeya');
	}

	

}