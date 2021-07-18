<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller
{

	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
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

	public function vehicle_setup()
	{
		$data1['brnd_info'] = $this->Admin_model->brand_list();

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('vehicle_name', 'vehicle_name', 'required');
		$this->form_validation->set_rules('brand_id', 'brand_id', 'required');
		$this->form_validation->set_rules('vehicle_details', 'vehicle_details', 'required');
		$this->form_validation->set_rules('vehicle_status', 'vehicle_status','required');
		$data1['message'] = '';
		if ($this->form_validation->run() == FALSE)
		{
	    echo"hello";
		}
		else{
	    $data['vehicle_name'] = $this->input->post('vehicle_name');
        $data['brand_id'] = $this->input->post('brand_id');
        $data['vehicle_details'] =$this->input->post('vehicle_details');
        $data['vehicle_status'] = $this->input->post('vehicle_status');
        $data['driver_id'] = $this->tank_auth->get_user_id();
        if ($_FILES['image_path']['size'] <= 10000000) {
            $result = $this->do_upload('image_path');
            if ($result['upload_data']) {
                $data['image_path'] = 'assets/image_path/' . $result['upload_data']['file_name'];
            }
        } 
        //print_r($data);
        $this->Admin_model->Insertvechile($data);
		$data1['message'] = 'Data Inserted Successfully';
		}
		$this->load->view('vechile_setup',$data1);
	}




	public function vehicle_brand_entry()
	{
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('brand_name', 'brand_name', 'required');
		$this->form_validation->set_rules('brand_model', 'brand_model', 'required');
		$this->form_validation->set_rules('brand_details', 'brand_details', 'required');
		$data1['message'] = '';
		if ($this->form_validation->run() == FALSE)
		{
	      echo "hello";
		}
		else{
		
        $this->Admin_model->Enterbrand();
		$data1['message'] = 'Data Inserted Successfully';	
		}
		$this->load->view('brand_entry',$data1);



	}
	
	function do_upload($image_file) {
        $config['upload_path'] = './assets/image_path/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000000';
        $config['max_width'] = '10000000';
        $config['max_height'] = '768000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($image_file)) {
            $error = array('error' => $this->upload->display_errors(), 'upload_data' => '');
            return $error;
            //$this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data(), 'error' => '');
            return $data;
            //$this->load->view('upload_success', $data);
        }  
    }

public function viewcars()

	{

		$data['h']=$this->Admin_model->viewcarinfo();  
         //return the data in view  
         $this->load->view('view_all cars', $data);  

	}


	public function viewcustomers()

	{

		$data['h']=$this->Admin_model->viewcustomer();  
         //return the data in view  
         $this->load->view('view_all_users', $data);  

	}


	public function viewdrivers()

	{

		$data['h']=$this->Admin_model->viewdriver();  
         //return the data in view  
         $this->load->view('view_all_drivers', $data);  

	}

public function updatevehicle()
{
        
        $this->load->library('form_validation');
		
		$this->form_validation->set_rules('vehicle_name', 'vehicle_name', 'required');
		$this->form_validation->set_rules('brand_id', 'brand_id', 'required');
		$this->form_validation->set_rules('vehicle_details', 'vehicle_details', 'required');
		//$this->form_validation->set_rules('vehicle_status', 'vehicle_status','required');
		$data1['message'] = '';
		if ($this->form_validation->run() == FALSE)
		{
	    echo"hello";
		}
		else{
	    $data['vehicle_name'] = $this->input->post('vehicle_name');
        $data['brand_id'] = $this->input->post('brand_id');
        $data['vehicle_details'] =$this->input->post('vehicle_details');
        //$data['vehicle_status'] = $this->input->post('vehicle_status');
        $vehicle_id = $this->input->post('vehicle_id');
        $this->Admin_model->updatevehicle($data,$vehicle_id);
        $data1['message'] = 'Data Inserted Successfully';
    	}
       $this->load->view('update_data',$data1);
    }


    public function updatecustomers()
{
        
        $this->load->library('form_validation');
		    $this->form_validation->set_rules('username', 'username', 'required');
		    $this->form_validation->set_rules('firstname', 'firstname', 'required');
			$this->form_validation->set_rules('lastname', 'lastname', 'required');
			$this->form_validation->set_rules('address', 'address', 'required');
			$this->form_validation->set_rules('mobile', 'mobile', 'required');
			$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|valid_email');
		//$this->form_validation->set_rules('vehicle_status', 'vehicle_status','required');
		$data1['message'] = '';
		if ($this->form_validation->run() == FALSE)
		{
	    echo"hello";
		}
		else{
		echo $data['username'] = $this->input->post('username');
       echo $data['firstname'] = $this->input->post('firstname');
	  echo  $data['lastname'] = $this->input->post('lastname');
        echo $data['address'] = $this->input->post('address');
        echo $data['mobile'] =$this->input->post('mobile');
        echo $data['email'] =$this->input->post('email');
        
        //$data['vehicle_status'] = $this->input->post('vehicle_status');
        $user_id=$this->tank_auth->get_user_id();
         //$user_id = $this->input->post('id');
        $this->Admin_model->updateuser($data,$user_id);
        $data1['message'] = 'Data Inserted Successfully';
    	}
       $this->load->view('update_user_data',$data1);
    }


public function edit_data()
{
	$data['brnd_info'] = $this->Admin_model->brand_list();
	$vehicle_id=$this->uri->segment(3);
	$data['vehicle_id'] =  $vehicle_id;
	$data['message'] = '';
	 $this->load->model('Admin_model');
	 $data['vehicle_data']=$this->Admin_model->fetchdata($vehicle_id);
	 //$data1['message'] = 'Data Inserted Successfully';
	 //$data['h']=$this->Admin_model->viewcarinfo(); 
	  $this->load->view('update_data',$data);  
	
}


public function edit_order()
{
	//$data['brnd_info'] = $this->Admin_model->brand_list();
	$booking_id=$this->uri->segment(3);
	$data['booking_id'] = $booking_id;
	$data['message'] = '';
	 //$this->load->model('Admin_model');
	 $data['order_infos']=$this->Admin_model->fetchcorder($booking_id);
	 //$data1['message'] = 'Data Inserted Successfully';
	 //$data['h']=$this->Admin_model->viewcarinfo(); 
	  $this->load->view('order_update',$data);  
	
}


public function edit_users()
{
	//$data['brnd_info'] = $this->Admin_model->brand_list();
	$user_id=$this->uri->segment(3);
	$data['id'] = $user_id;
	$data['message'] = '';
	 //$this->load->model('Admin_model');
	 $data['order_infos']=$this->Admin_model->fetchcsutomer($user_id);
	 //$data1['message'] = 'Data Inserted Successfully';
	 //$data['h']=$this->Admin_model->viewcarinfo(); 
	  $this->load->view('update_user_data2',$data);  
	
}

  public function updatecustomers2()
{
        
        $this->load->library('form_validation');
		    $this->form_validation->set_rules('username', 'username', 'required');
		    $this->form_validation->set_rules('firstname', 'firstname', 'required');
			$this->form_validation->set_rules('lastname', 'lastname', 'required');
			$this->form_validation->set_rules('address', 'address', 'required');
			$this->form_validation->set_rules('mobile', 'mobile', 'required');
			$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|valid_email');
		//$this->form_validation->set_rules('vehicle_status', 'vehicle_status','required');
		$data1['message'] = '';
		if ($this->form_validation->run() == FALSE)
		{
	    echo"hello";
		}
		else{
		echo $data['username'] = $this->input->post('username');
       echo $data['firstname'] = $this->input->post('firstname');
	  echo  $data['lastname'] = $this->input->post('lastname');
        echo $data['address'] = $this->input->post('address');
        echo $data['mobile'] =$this->input->post('mobile');
        echo $data['email'] =$this->input->post('email');
        
        //$data['vehicle_status'] = $this->input->post('vehicle_status');
        $user_id=$this->uri->segment(3);
         //$user_id = $this->input->post('id');
        $this->Admin_model->updateuser($data,$user_id);
        $data1['message'] = 'Data Inserted Successfully';
    	}
       $this->load->view('update_user_data',$data1);
    }





public function updatorder()
{
        
        $this->load->library('form_validation');
		
		  $booking_id=$this->uri->segment(3);
	     //$data['booking_id'] = $booking_id;
		//$this->form_validation->set_rules('vehicle_name', 'vehicle_name', 'required');
		$this->form_validation->set_rules('start_date', 'start_date', 'required');
		$this->form_validation->set_rules('end_date', 'end_date', 'required');
		$this->form_validation->set_rules('vehicle_status', 'vehicle_status','required');
		$data1['message'] = '';
		if ($this->form_validation->run() == FALSE)
		{
	    echo"hello";
		}
		else{
	    //$data['vehicle_name'] = $this->input->post('vehicle_name');
         $data['start_date'] = $this->input->post('start_date');
         $data['end_date'] =$this->input->post('end_date');
        $data['vehicle_status'] = $this->input->post('vehicle_status');
        //$vehicle_id = $this->input->post('vehicle_id');
        $this->Admin_model->updateorderinfo($data,$booking_id);
        $data1['message'] = 'Data Inserted Successfully';
    	}
       $this->load->view('order_update',$data1);
    }




public function edit_customers()
{
	//$data['brnd_info'] = $this->Admin_model->brand_list();
	$user_id=$this->uri->segment(3);
	$data['id'] =  $user_id;
	$data['message'] = '';
	 $this->load->model('Admin_model');
	 $data['user_data']=$this->Admin_model->fetchcsutomer($user_id);
	 //$data1['message'] = 'Data Inserted Successfully';
	 //$data['h']=$this->Admin_model->viewcarinfo(); 
	  $this->load->view('update_user_data',$data);  
	
}



public function delete_users()
{
	$user_id=$this->uri->segment(3);
	$this->Admin_model->delete_data($user_id);
	redirect(base_url(). "Admin_controller/deleted");
}


public function deleted()
{
	$this->index();
}


public function aboutusinsert()
{
	
	         $this->load->library('form_validation');
		    $this->form_validation->set_rules('a_few_word', 'a_few_word', 'required');
		    //$this->form_validation->set_rules('firstname', 'firstname', 'required');
			//$this->form_validation->set_rules('lastname', 'lastname', 'required');
			$data1['message'] = '';
		if ($this->form_validation->run() == FALSE)
		{
	      //echo "hello";
		}
		else{
		$data['a_few_word'] = $this->input->post('a_few_word');
        $this->Admin_model->insertaboutus($data);
		$data1['message'] = 'Data Inserted Successfully';	
		}

	$this->load->view('about_us_page',$data1); 
}



public function viewaboutus()

	{

		$data['h']=$this->Admin_model->viewaboutus();  
         //return the data in view  
         $this->load->view('front/about', $data);  

	}

	public function viewaboutus2()

	{

		$data['h']=$this->Admin_model->viewaboutus();  
         //return the data in view  
         $this->load->view('front/about', $data);  

	}


	public function edit_aboutus()
	{

	}



	public function putorder()
	{
		$data['exist'] = FALSE;
		$vehicle_id=$this->uri->segment(3);
		$data['vehicle_id'] = $vehicle_id;
        //$data1['message'] = '';
        $this->load->model('Admin_model');
	    $data['vehicle_infos']=$this->Admin_model->vehiclename($vehicle_id);
	    //$data1['message'] = 'Data Inserted Successfully';
	    $data['book_info'] = $this->Admin_model->checkid($vehicle_id);
	    if($data['book_info']){
	    	$data['exist'] = TRUE;
		}
        
	    $this->load->view('order_final',$data);
	}
	
	function checkid(){
		$car_id = $this->input->post('carid');
		$data['book_info'] = $this->Admin_model->checkid($car_id);
		if($data['book_info']){
			echo json_encode($data['book_info']);
		}
		else{
			echo json_encode('no');
		}
	}

	
	public function putorder2()
	{
		//$data['exist'] = '';
		//$vehicle_id=$this->uri->segment(3);
		//$data['vehicle_id'] = $vehicle_id;
		$order_id = '';
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('vehicle_id', 'vehicle_name', 'required');
		$this->form_validation->set_rules('customer_id', 'customer_id', 'required');
		$this->form_validation->set_rules('start_date', 'start_date', 'required');
		$this->form_validation->set_rules('start_date', 'start_date', 'required');
		$this->form_validation->set_rules('vehicle_status', 'vehicle_status', 'required');
		$data1['message'] = '';
		//$data1['exists']='';
		$start_date=$data['start_date'] = $this->input->post('start_date');
        $end_date=$data['end_date'] = $this->input->post('end_date');
        $vehicle_id=$data['vehicle_id'] = $this->input->post('vehicle_id');

        if($this->form_validation->run() == FALSE)
		{
	    	//echo "hello";
		}
		else{
	    $data['vehicle_id'] = $this->input->post('vehicle_id');
        $data['customer_id'] = $this->input->post('customer_id');
        $data['start_date'] = $this->input->post('start_date');
        $data['end_date'] = $this->input->post('end_date');
        $data['vehicle_status'] = $this->input->post('vehicle_status');
             if($this->Admin_model->checkid2($vehicle_id,$start_date,$end_date))
		        {
		        	echo"hello I am good";
		        }
		     else{
		       $order_id = $this->Admin_model->Insertorder($data);
        	    $data1['message'] = 'Data Inserted Successfully';
		        }
       }
    
    	
    
    
	   
	    $this->load->view('order_form',$data1);
	    //redirect('Admin_controller/displayorder/'.$order_id);
	
}


function test(){
	$vehicle_id = 31;
	$start_date = '2018-04-15';
	$end_date = '2018-04-20';
	$row = $this->Admin_model->checkid2($vehicle_id,$start_date,$end_date);

	print_r($row);
}




	public function displayorder($order_id)
	{
		$data['h']=$this->Admin_model->displayorderinfo($order_id);  
         //return the data in view  
         $this->load->view('show_order', $data);  
	}


public function vieworders()

	{

		$data['h']=$this->Admin_model->vieworderinfo();  
         //return the data in view  

         $this->load->view('view_order', $data);  

	}

	public function viewdrivercars()
	{
		$user_id=$this->tank_auth->get_user_id();
		$data['viewcars']=$this->Admin_model->fetchcars();
		$this->load->view('carorder',$data);
	}



public function displayallorder()
	{

		$user_id=$this->tank_auth->get_user_id();
		$data['h']=$this->Admin_model->viewuserorder($user_id);  
         //return the data in view  
         $this->load->view('show_all_order', $data);  
	}


	public function displayjoblog()
	{

		$user_id=$this->tank_auth->get_user_id();
		$data['h']=$this->Admin_model->viewallorderinfo($user_id);  
         //return the data in view  
         $this->load->view('show_all_order', $data);  
	}


	public function displaytrip()
	{

		$user_id=$this->tank_auth->get_user_id();
		$data['h']=$this->Admin_model->viewallorderinfo($user_id);  
         //return the data in view  
         $this->load->view('show_all_driver_order', $data);  
	}





}


