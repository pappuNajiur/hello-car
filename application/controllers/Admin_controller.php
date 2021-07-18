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
		
	$user_id=$this->tank_auth->get_user_id();
	$date = date('Y-m-d');
	$booking = "SELECT * FROM booking_list,vehicle_info,service_providers_list WHERE end_date < '".$date."' and customer_id = '".$user_id."' AND booking_list.vehicle_id = vehicle_info.vehicle_id AND vehicle_info.driver_id = service_providers_list.driver_id";
	$booked = $this->db->query($booking);
	$total_booking = $booked->num_rows();
	$data['order_info'] = $booked->result();
	//var_dump($total_booking);

		$this->load->view('index',$data);
		
	}

	public function vehicle_setup()
	{
		$data1['brnd_info'] = $this->Admin_model->brand_list();
		$data1['Status_info'] = $this->Admin_model->vehicle_sts() ;

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('vehicle_name', 'vehicle_name', 'required');
		$this->form_validation->set_rules('brand_id', 'brand_id', 'required');
		$this->form_validation->set_rules('vehicle_details', 'vehicle_details', 'required');
		$this->form_validation->set_rules('vehicle_rate', 'vehicle_rate', 'required');
		$this->form_validation->set_rules('vehicle_plate', 'vehicle_plate', 'required');
		$this->form_validation->set_rules('aircondition', 'aircondition', 'required');
		$this->form_validation->set_rules('vehicle_status', 'vehicle_status','required');
		$data1['message'] = '';
		if ($this->form_validation->run() == FALSE)
		{
	    	//echo"Setup failed. Try again";
		}
		else{
	    $data['vehicle_name'] = $this->input->post('vehicle_name');
	    $data['vehicle_rate'] = $this->input->post('vehicle_rate');
        $data['brand_id'] = $this->input->post('brand_id');
        $data['vehicle_details'] =$this->input->post('vehicle_details');
        $data['vehicle_plate'] = $this->input->post('vehicle_plate');
        $data['aircondition'] = $this->input->post('aircondition');
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
		//$this->form_validation->set_rules('brand_model', 'brand_model', 'required');
		//$this->form_validation->set_rules('brand_details', 'brand_details', 'required');
		$data1['message'] = '';
		if ($this->form_validation->run() == FALSE)
		{
	      //echo "Insert failed. try again";
		}
		else{
		
        $this->Admin_model->Enterbrand();
		//$data1['message'] = 'Data Inserted Successfully';	
		redirect(base_url(). "Admin_controller/vehicle_setup");
		
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
	
	public function viewcartdrivers()
	{
		$data['h']=$this->Admin_model->viewcartdrivers();  
         //cart wise view  
         $this->load->view('view_drivers', $data);  
	}
	public function bannedusers()
	{
		$data['h']=$this->Admin_model->viewbannedusers();  
         //cart wise view  
         $this->load->view('view_banned', $data);
				 
	}
	
	function invoice_view(){
		$this->load->view('invoice_view');
	}

public function updatevehicle()
{
        
        $this->load->library('form_validation');
		
		$this->form_validation->set_rules('vehicle_name', 'vehicle_name', 'required');
		$this->form_validation->set_rules('brand_id', 'brand_id', 'required');
		$this->form_validation->set_rules('vehicle_rate', 'vehicle_rate', 'required');
		$this->form_validation->set_rules('vehicle_details', 'vehicle_details', 'required');
		//$this->form_validation->set_rules('vehicle_status', 'vehicle_status','required');
		$data1['message'] = '';
		if ($this->form_validation->run() == FALSE)
		{
	    echo"hello";
		}
		else{
	    $data['vehicle_name'] = $this->input->post('vehicle_name');
	    $data['vehicle_rate'] = $this->input->post('vehicle_rate');
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
	   // echo"hello1";
		}
		else{
		$data['username'] = $this->input->post('username');
        $data['firstname'] = $this->input->post('firstname');
		$data['lastname'] = $this->input->post('lastname');
        $data['address'] = $this->input->post('address');
         $data['mobile'] =$this->input->post('mobile');
         $data['email'] =$this->input->post('email');
        
        //$data['vehicle_status'] = $this->input->post('vehicle_status');
        //$user_id=$this->tank_auth->get_user_id();
        $user_id = $this->input->post('id');
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

public function edit_driver()
{
	//$data['brnd_info'] = $this->Admin_model->brand_list();
	$user_id=$this->uri->segment(3);
	//$data['id'] = $driver_id;
	$data['message'] = '';
	 //$this->load->model('Admin_model');
	 $data['driver_infos']=$this->Admin_model->fetchdriver();
	 //$data1['message'] = 'Data Inserted Successfully';
	 //$data['h']=$this->Admin_model->viewcarinfo(); 
	  $this->load->view('update_driver_data',$data);  
	
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
	    //echo"hello";
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
	    $data['feed'] = $this->Admin_model->get_feedback($vehicle_id);
		
		
	    if($data['book_info']){
	    	$data['exist'] = TRUE;
		}
        
	    $this->load->view('order_final',$data);
	}
	
	public function checkid(){
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
		$data['status'] = '';
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
        $data['vehicle_status'] = "active";//$this->input->post('vehicle_status');
        $data['curr_rate'] = $this->input->post('curr_rate');//$this->input->post('vehicle_status');
             if($dates = $this->Admin_model->checkid2($vehicle_id,$start_date,$end_date))
		        {
					$i = 0;
					$all_date = '';
					$all_arr = array();
					foreach($dates as $date){
						$start = $date->start_date;
						$end   = $date->end_date;
						$st = $start;
						while($st <= $end){
							$all_arr[$i] = $st;
							$st = date('Y-m-d', strtotime($st. ' + 1 days')); 
							$i++;
						}
					}
					
					
					usort($all_arr, array($this,'sortFunction'));
					$i = 0;
					foreach($all_arr as $dte){
							if($i != 0){
								$all_date.= ', '.$dte;
							}
							else{
								$all_date.= $dte;
							}
							$i++;
					}
					
					
					
					//print_r($all_arr);
					
		        	$data1['message'] = "This car is already booked for ".$all_date." "."<br>"."Select another one";
		        }
		     else{
		       $order_id = $this->Admin_model->Insertorder($data);
        	    $data1['message'] = 'Car Booked Successfully';
					$data['status'] = 1;
        	    redirect('Admin_controller/displayorder/'.$order_id);
		        }
       }
    
	    $this->load->view('order_form',$data1);
	    
	
}

	function sortFunction( $a, $b ) {
		return strtotime($a) - strtotime($b);
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
		 $data['order_id'] = $order_id;
         $this->load->view('show_order', $data);  
	}

	public function order_payment($order_id = ''){
		$quryss = $this->Admin_model->displayorderinfo($order_id);
		$data['h']=  $quryss;
         //return the data in view  
		 $data['order_id'] = $order_id;
		 $data['status'] = '';
		 
		 
		$this->form_validation->set_rules('trans_id','Transaction ID is Required','required');
		$this->form_validation->set_rules('mobile_number','Mobile Number is Required','required');
		$this->form_validation->set_rules('paid_amount','Paid Amount is Required','required');
		
		if($this->form_validation->run() == TRUE){
			$is_success = $this->Admin_model->create_payment();
			$data['status'] = $is_success;

		}
		 
         $this->load->view('order_payment', $data);  
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
	
	public function view_unverified_payment()
	{
		$data['h']=$this->Admin_model->view_unverified_payment();  
         $this->load->view('view_transaction', $data);  
	}
	function verify_payament(){
		$transaction_id = $this->input->post('trans_id');
		$status 		= $this->input->post('status');
		$udata = array('transaction_status' => $status);
		$this->db->where('transaction_id',$transaction_id);
		$this->db->update('transaction_info',$udata);
		
		if($status == 1){
			$this->db->from('transaction_info,booking_list,users,vehicle_info');
			$this->db->where('transaction_info.booking_id = booking_list.booking_id');
			$this->db->where('users.id = booking_list.customer_id');
			$this->db->where('booking_list.vehicle_id = vehicle_info.vehicle_id');
			$this->db->where('transaction_info.transaction_id',$transaction_id);
			$que = $this->db->get();
			
			$data['row'] = $que->row();
			
			//$this->load->view('invoice_view',$data);
			
			$body = $this->load->view('invoice_view',$data,TRUE);
			
					    $config = Array(
						  'mailtype' => 'html',
						  'charset' => 'iso-8859-1'
						);

				$this->load->library('email', $config);

				$this->email->set_newline("\r\n");
					$this->load->library('email');
					
					$this->email->from('rahmanpappu8@gmail.com' ,'Hello Car');
					//$this->email->reply_to('');
					$this->email->to($data['row'] ->email);
					//$this->email->to('muzahidahmed4@gmail.com');
					$this->email->subject('Hello Car Invoice');
					$this->email->message($body);
					$this->email->send();
		}
		else if($status == 2){
			$this->db->from('transaction_info,booking_list,users,vehicle_info');
			$this->db->where('transaction_info.booking_id = booking_list.booking_id');
			$this->db->where('users.id = booking_list.customer_id');
			$this->db->where('booking_list.vehicle_id = vehicle_info.vehicle_id');
			$this->db->where('transaction_info.transaction_id',$transaction_id);
			$que = $this->db->get();
			
			$data['row'] = $que->row();
			
			//$this->load->view('invoice_view',$data);
			
			$body = $this->load->view('winvoice_view',$data,TRUE);
			
					    $config = Array(
						  'mailtype' => 'html',
						  'charset' => 'iso-8859-1'
						);

				$this->load->library('email', $config);

				$this->email->set_newline("\r\n");
					$this->load->library('email');
					
					$this->email->from('rahmanpappu8@gmail.com' ,'Hello Car');
					//$this->email->reply_to('');
					$this->email->to($data['row'] ->email);
					//$this->email->to('muzahidahmed4@gmail.com');
					$this->email->subject('Wrong Transaction Info');
					$this->email->message($body);
					$this->email->send();
		}
		
		echo json_encode(1);
	}
	
	
	public function view_verified_payment()
	{
		$data['h']=$this->Admin_model->view_verified_payment();  
         $this->load->view('view_verify_transaction', $data);  
	}

	public function vieworders()	{

		$data['h']=$this->Admin_model->vieworderinfo();  
         //return the data in view  
		
         $this->load->view('view_order',$data);  

	}
	
	public function view_data(){
	$data['h']=$this->Admin_model->viewtestdata();
	$this->load->view('showdata',$data);
}

	public function displaytrip()
	{

		$user_id=$this->tank_auth->get_user_id();
		$user_type=$this->tank_auth->get_user_type();
		if($user_type == 'driver'){
			$data['h']=$this->Admin_model->viewallorderinfo($user_id); 
			//$total_booking = $data['h']->num_rows();
			//var_dump($total_booking);
		}
		else{

			$data['h']=$this->Admin_model->view_my_order($user_id); 
		}	


         //return the data in view  
         $this->load->view('show_all_driver_order',$data);  
	}
	
	Public function view_test(){
		
		$this->Admin_model->insert_ctest();
		$this->load->view('ctest');
	}
	
public function ban_users()
{
	$user_id=$this->uri->segment(3);
	$this->Admin_model->ban_data($user_id);
	redirect(base_url(). "Admin_controller/viewcustomers");
}

public function unban_users()
{
	$user_id=$this->uri->segment(3);
	$this->Admin_model->unban_data($user_id);
	redirect(base_url(). "Admin_controller/bannedusers");
}


public function delete_users()
{
	$user_id=$this->uri->segment(3);
	$this->Admin_model->delete_data($user_id);
	redirect(base_url(). "Admin_controller/deleted");
}
public function delete_car()
{
	$vehicle_id=$this->uri->segment(3);
	$this->Admin_model->delete_cars($vehicle_id);
	redirect(base_url(). "Admin_controller/deleted");
}
public function delete_ctest(){
	$ct_id=$this->uri->segment(3);
	$this->Admin_model->delete_ctest($ct_id);
	redirect(base_url(). "Admin_controller/view_data");
}

public function delete_order()
{
	$booking_id=$this->uri->segment(3);
	$this->Admin_model->delete_orders($booking_id);
	redirect(base_url(). "Admin_controller/deleted");
}


public function deleted()
{
	$this->index();
}

	public function feedback()
	{
		$order_id = $this->uri->segment(3);
		$this->db->from('booking_list,vehicle_info,service_providers_list	');
		$this->db->where('booking_id',$order_id);
		$this->db->where('booking_list.vehicle_id = vehicle_info.vehicle_id');
		$this->db->where('service_providers_list.driver_id = vehicle_info.driver_id');
		$data['order_info'] = $this->db->get()->row();
		
		$data['status'] = '';
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('feedback','Required','required');
		if($this->form_validation->run() == TRUE){
			
			$order_id = $this->input->post('order_id');
			
			$this->db->where('order_id',$order_id);
			$qqu = $this->db->get('feedback');
			if($qqu->num_rows() < 1){
			date_default_timezone_set('asia/dhaka');
			$date = date('Y-m-d h:i:s',time());
			$ins = array(
				'userID' => $user_id=$this->tank_auth->get_user_id(),
				'vehicle_id' => $this->input->post('vehicle_id'), 
				'feedback' => $this->input->post('feedback'), 
				'rating' => $this->input->post('rating'),
				'order_id' => $this->input->post('order_id'),
				'c_date' => $date
				);
				
			$this->db->insert('feedback',$ins);
			$data['status'] = 'success';
			}
			else{
				$data['status'] = 'exist';
			}
		}
		
		$this->load->view('feedback',$data);
	}


public function chart_show(){
	
	$user_type=$this->tank_auth->get_user_type();
		if($user_type == 'admin'){
	$date = date('Y-m-d');
	$booking = "SELECT * FROM booking_list WHERE start_date >= '".$date."' and vehicle_status = 'active'";
	$booked = $this->db->query($booking);
	$total_booking = $booked->num_rows();

	$vehicl = "SELECT * FROM vehicle_info WHERE vehicle_status = 1";
	$vehicle = $this->db->query($vehicl);
	$total_v = $vehicle->num_rows();

	$customer = "SELECT * FROM users WHERE user_type = 'customer'";
	$customers = $this->db->query($customer);
	$total_customer = $customers->num_rows();

	$driver = "SELECT * FROM users WHERE user_type = 'driver'";
	$drivers = $this->db->query($driver);
	$total_driver = $drivers->num_rows();
	
	


	/*$arr_data = [];
	foreach ($variable as $key => $value) {
		$row_data = ['label' => 'Car name field', 'y' => 'car_rate'];

		$arr_data[] = $row_data;
	}
echo json_encode($arr_data);*/

	$data = array(
		array("label"=> "Total Booking", "y"=> $total_booking),
		array("label"=> "Total Vehicle", "y"=> $total_v),
		array("label"=> "Total Customer", "y"=> $total_customer),
		array("label"=> "Total Driver", "y"=> $total_driver)
	);

	echo json_encode($data);
	

}
		else{
	$date = date('Y-m-d');
	$booking = "SELECT * FROM booking_list WHERE start_date >= '".$date."' and vehicle_status = 'active'";
	$booked = $this->db->query($booking);
	$total_booking = $booked->num_rows();

	/* $vehicl = "SELECT * FROM vehicle_info WHERE vehicle_status = 1";
	$vehicle = $this->db->query($vehicl);
	$total_v = $vehicle->num_rows(); */

	$customer = "SELECT * FROM users WHERE user_type = 'customer'";
	$customers = $this->db->query($customer);
	$total_customer = $customers->num_rows();
	
	$id = $this->tank_auth->get_user_id();
	$driver = "SELECT * FROM vehicle_info WHERE driver_id = '".$id."'";
	$drivers = $this->db->query($driver);
	$total_veh = $drivers->num_rows();
	

	/* $arr_data = [];
	foreach ($variable as $key => $value) {
		$row_data = ['label' => 'Car name field', 'y' => 'car_rate'];

		$arr_data[] = $row_data;
	} 
echo json_encode($arr_data);*/

	$data = array(
		array("label"=> "Total Booking", "y"=> $total_booking),
		//array("label"=> "Total Vehicle", "y"=> $total_v),
		array("label"=> "Total Customer", "y"=> $total_customer),
		array("label"=> "Total vehicle", "y"=> $total_veh)
	);

	echo json_encode($data);
	
}
}

public function tst(){
	
	$user_id=$this->tank_auth->get_user_id();
	$date = date('Y-m-d');
	$booking = "SELECT * FROM booking_list WHERE end_date < '".$date."' and customer_id = '".$user_id."'";
	$booked = $this->db->query($booking);
	$total_booking = $booked->num_rows();
	var_dump($total_booking);
	

}
public function driverinfo()
	{
		$driver_id = $this->tank_auth->get_user_id();
		$data['status'] = '';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('license_no','Required','required');
		$this->form_validation->set_rules('issue','Required','required');
		$this->form_validation->set_rules('valid','Required','required');
		$this->form_validation->set_rules('dob','Required','required');
		if($this->form_validation->run() == TRUE){
		//$driver_id = $this->input->post('driver_id');
			
			$this->db->where('driver_id',$driver_id);
			$qqu = $this->db->get('license');
			if($qqu->num_rows() < 1){
			$ins = array(
				'driver_id' => $driver_id=$this->tank_auth->get_user_id(),
				'license_no' => $this->input->post('license_no'), 
				'issue' => $this->input->post('issue'), 
				'valid' => $this->input->post('valid'),
				'dob' => $this->input->post('dob'),
				);
				
				
			$this->db->insert('license',$ins);
			$data['status'] = 'success';
			}
			else{
				$data['status'] = 'exist';
			}
		}
		$this->load->view('license',$data);
	}
	
	public function banned_user()
	{
		$banuser = "SELECT * FROM users WHERE banned = '1'";
		$ban_user = $this->db->query($banuser);
		$total_banned = $ban_user->num_rows();
		var_dump($total_banned);
	}
			

}



