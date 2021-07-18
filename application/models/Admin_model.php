<?php


class Admin_model extends CI_Model
{
	


	public function Insertvechile($data) 
  {
     //print_r ($data);
    $this->db->insert('vehicle_info',$data);    
    //return true;
  }

  public function insertaboutus($data) 
  {
     //print_r ($data);
    $this->db->insert('about_us',$data);    
    return true;
  }




public function getname() 
  {
      
  $this->db->select('brand_name');
  $this->db->from('brand_setup');
  $query=$this->db->get();
  return $query;    
      
  }



  public function Enterbrand() 
  {
        $ins_data = array(
        					'brand_name' => $this->input->post('brand_name'),
        					'brand_model' => $this->input->post('brand_model'),
        					'brand_details' => $this->input->post('brand_details')
        					);

  		$this->db->insert('brand_setup',$ins_data);    
      
  }
  
  
  public function insert_ctest(){
	  $ctest=array(
	  'name'=>$this->input->post('name'),
	  'dep'=>$this->input->post('dep'),
	  'batch'=>$this->input->post('batch'),
	  'sid'=>$this->input->post('sid'),
	  );
	  $this->db->insert('ctable',$ctest);
  }
   
	
  public function brand_list() 
  {
        $query = $this->db->get('brand_setup');
        $brand[''] = 'Select Brand';
        foreach ($query->result() as $row) {
          $brand[$row->brand_id] = $row->brand_name;
        }
        return $brand;
  }
  
  public function vehicle_sts() 
  {
        $query = $this->db->get('vehicle_status');
        $status[''] = 'Select Status';
        foreach ($query->result() as $row) {
          $status[$row->vcl_id] = $row->vcl_status;
        }
        return $status;
  }
  
  public function getVehicle($vclid){
		$this->db->select('*');
		$this->db->from('vehicle_status');
		$this->db->where('vcl_id', $vclid);
		$qresult = $this->db->get();
		
		
		if($qresult->num_rows() > 0){
			return $result = $qresult->row();
		}
		else{
			return FALSE;
		}
		
	}
	
	public function getBrand($brandid){
		$this->db->select('*');
		$this->db->from('brand_setup');
		$this->db->where('brand_id', $brandid);
		$qresult = $this->db->get();
		$result = $qresult->row();
		return $result; 
	}
	public function getfeed($feed){
		$this->db->select('*');
		$this->db->from('feedback');
		$this->db->where('feedback', $feed);
		$qresult = $this->db->get();
		$result = $qresult->row();
		return $result; 
	}
	
	
	public function getUser($userid){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id', $userid);
		$qresult = $this->db->get();
		$result = $qresult->row();
		return $result; 
	}
	
	
	
	public function viewcarinfo()
  {
      
         $query = $this->db->get('vehicle_info');  
         return $query;  
       }


       public function viewcustomer()
        {
      
         $this->db->select('id,username,firstname,lastname,email,mobile,address');
         $query = $this->db->get('users');  
         return $query;  
       }


       public function viewaboutus()
        {
      
         $this->db->select('a_few_word');
         $query = $this->db->get('about_us');  
         return $query;  
       }

       public function viewdriver()
        {
      
         $this->db->select('id,firstname,lastname,email,mobile,address,image_path');
         $this->db->from('users');
         $this->db->where('user_type','driver');
        //$this->db->update('booking_list');
         $query=$this->db->get();
         return $query;   
       }

        public function viewcartdrivers()
        {
      
         $this->db->select('id,firstname,lastname,email,mobile,address,image_path');
         $this->db->from('users');
         $this->db->where('user_type','driver');
        //$this->db->update('booking_list');
         //view in cart
         $query=$this->db->get();
         return $query;   
       }



       public function fetchdata($vehicle_id)
        {
      
         $this->db->where('vehicle_id',$vehicle_id);
         $query = $this->db->get('vehicle_info');  
         return $query;  
       }


       public function fetchcsutomer($user_id)
        {
      
         $this->db->where('id',$user_id);
         $query = $this->db->get('users');  
         return $query;  
       }

       public function fetchdriver()
        {
      
         $this->db->where('id');
         $query = $this->db->get('users');  
         return $query;  
       }

       public function fetchcorder($booking_id)
        {
      
         $this->db->select('booking_list.start_date,booking_list.end_date,booking_list.vehicle_status');
         $this->db->from('booking_list');
         //$this->db->where('booking_list.vehicle_id = vehicle_info.vehicle_id');
         //$this->db->where('booking_list.booking_id',$order_id);
         //$this->db->join('users', 'users.id = booking_list.customer_id', 'inner');
         $this->db->where('booking_id',$booking_id);
         $query = $this->db->get();  
         return $query;  
       }

       public function updateorderinfo($data,$booking_id)
       {
         $this->db->where('booking_id',$booking_id);
         $this->db->update('booking_list',$data);
         return TRUE;    
       }



       public function updatevehicle($data,$vehicle_id)
       {
         $this->db->where('vehicle_id',$vehicle_id);
         $this->db->update('vehicle_info',$data);   
       }


       public function updateuser($data,$user_id)
       {
         $this->db->where('id',$user_id);
         $this->db->update('users',$data); 
         return TRUE;  
       }
      public function updatedriver($data,$driver_id)
             {
               $this->db->where('id',$driver_id);
               $this->db->update('users',$data); 
               return TRUE;  
             }
	
	function get_feedback($vehicle_id){
		$this->db->where('vehicle_id',$vehicle_id);
		
		
		$que = $this->db->get('feedback');
		if($que->num_rows() > 0)
		return $que->row();
	else return FALSE;
	}
public function vehiclename($vehicle_id)
{
$this->db->select('*,vehicle_info.image_path AS car_path');
$this->db->from('vehicle_info,users,brand_setup');
$this->db->where('vehicle_info.driver_id = users.id');
$this->db->where('vehicle_info.brand_id = brand_setup.brand_id');
$this->db->where('vehicle_id',$vehicle_id);
//$this->db->update('booking_list');
  $query=$this->db->get();
  return $query; 
}


public function vehicledetails($vehicle_id)
{
$this->db->select('vehicle_id,start_date,end_date');
$this->db->from('booking_list');
$this->db->where('vehicle_id',$vehicle_id);

//$this->db->update('booking_list');
  $query=$this->db->get();
  return $query; 
}


public function Insertorder($data) 
  {
     //print_r ($data);
    $this->db->insert('booking_list',$data);    
    return $this->db->insert_id();
  }

/*public function checkid2($vehicle_id,$start_date,$end_date)
{
  
  //date_default_timezone_set('asia/dhaka');
  //$date = date('Y-m-d',time());
  $this->db->where('vehicle_id',$vehicle_id);
  $this->db->where('start_date <= ',$date);
  $this->db->where('end_date >= ',$date);
  $this->db->from('booking_list');
  $query=$this->db->get();
  if($query->num_rows() >0)
  {
    return $query->row();
  }
  else{
    return FALSE;
}
}
*/
public function checkid($vehicle_id)
{
  
  date_default_timezone_set('asia/dhaka');
  $date = date('Y-m-d',time());
  $this->db->where('vehicle_id',$vehicle_id);
  $this->db->where('start_date <= ',$date);
  //$this->db->where('start_date >= ',$date);
  $this->db->where('start_date >= ',$date);
  $this->db->from('booking_list');
  $query=$this->db->get();
  if($query->num_rows() >0)
  {
    return $query->row();
  }
  else{
    return FALSE;
}
}

public function checkid2($vehicle_id,$start_date,$end_date)
{
   $status="active";
  //date_default_timezone_set('asia/dhaka');
  //$date = date('Y-m-d',time());
  //$this->db->select('booking_id');
  $this->db->from('booking_list');
  $this->db->where('vehicle_status = "'.$status.'"');
  $this->db->where('vehicle_id',$vehicle_id);
  $this->db->where('(((start_date <= "'.$start_date.'") AND (end_date >="'.$end_date.'" )) OR ((start_date >= "'.$start_date.'") AND (end_date <="'.$end_date.'")) OR (( start_date <="'.$start_date.'") AND (end_date >="'.$start_date.'")) OR ((start_date <="'.$end_date.'") AND (end_date >="'.$end_date.'")))');

  
  $query = $this->db->get();
  if($query->num_rows() >0)
  {
    //print_r($query->row());
		return $query->result();
  }
  else{
		return FALSE;
	}
}

public function viewtestdata(){
	$this->db->select('*');
	$this->db->from('ctable');
	$query= $this->db->get();
	return $query;
	
}

public function vieworderinfo()
  {
        
         $this->db->select('vehicle_info.vehicle_name,vehicle_info.vehicle_rate,booking_list.booking_id,booking_list.start_date,booking_list.end_date,users.username');
         $this->db->from('vehicle_info');
         $this->db->join('booking_list', 'vehicle_info.vehicle_id =booking_list.vehicle_id', 'inner');
         $this->db->join('users', 'users.id = booking_list.customer_id', 'inner');
         $query = $this->db->get();
         return $query;  
       }


	public function viewallorderinfo($user_id)
	{
      
         $this->db->select('vehicle_info.vehicle_name,booking_list.booking_id, vehicle_info.vehicle_rate,booking_list.start_date,booking_list.end_date,users.firstname,users.mobile');
         $this->db->from('vehicle_info');
         $this->db->join('service_providers_list', 'vehicle_info.driver_id=service_providers_list.driver_id', 'inner');
         $this->db->join('booking_list', 'vehicle_info.vehicle_id =booking_list.vehicle_id', 'inner');
         $this->db->join('users', 'users.id = booking_list.customer_id', 'inner');
         $this->db->where('service_providers_list.driver_id',$user_id);
         $query = $this->db->get();
         return $query;  
    }      
	public function view_my_order($user_id)
	{
      
         $this->db->select('vehicle_info.vehicle_name,vehicle_info.vehicle_rate,booking_list.booking_id,  booking_list.start_date,booking_list.end_date,service_providers_list.service_provider_name,service_providers_list.phone');
		 
		 //$this->db->select('vehicle_info.vehicle_name,booking_list.booking_id, vehicle_info.vehicle_rate,booking_list.start_date,booking_list.end_date,users.firstname,users.mobile');
         $this->db->from('vehicle_info');
         $this->db->join('service_providers_list', 'vehicle_info.driver_id=service_providers_list.driver_id', 'inner');
         $this->db->join('booking_list', 'vehicle_info.vehicle_id =booking_list.vehicle_id', 'inner');
         $this->db->join('users', 'users.id = booking_list.customer_id', 'inner');
         $this->db->where('users.id',$user_id);
         $query = $this->db->get();
         return $query;  
    }   
		public function create_payment(){
			date_default_timezone_set("Asia/Dhaka");
			$date = date('Y-m-d h:i:s',time());
			
			
			$this->db->where('transaction_number',$this->input->post('trans_id'));
			$que = $this->db->get('transaction_info');
			if($que->num_rows() < 1){
				$ins_data = array(
								'booking_id' 		=> $this->input->post('booking_id'),
								'customer_id' 		=> $this->tank_auth->get_user_id(),
								'paid_amount' 		=> $this->input->post('paid_amount'),
								'transaction_number' => $this->input->post('trans_id'),
								'mobile_number' 	=> $this->input->post('mobile_number'),
								'transaction_date' 	=> $date
								);
				$this->db->insert('transaction_info', $ins_data);
				return 1;
			}
			else{
				return 2;
			}
		}


       public function displayorderinfo($order_id)
  {
      
         $this->db->select('vehicle_info.vehicle_name,vehicle_info.vehicle_rate,booking_list.start_date,booking_list.end_date,users.username');
         $this->db->from('vehicle_info,booking_list');
         $this->db->where('booking_list.vehicle_id = vehicle_info.vehicle_id');
         $this->db->where('booking_list.booking_id',$order_id);
         $this->db->join('users', 'users.id = booking_list.customer_id', 'inner');
         $query = $this->db->get();
         return $query;  
       }



    


    public function viewuserorder($user_id)
  {
      
         $this->db->select('vehicle_info.vehicle_name,booking_list.start_date,booking_list.end_date,booking_list.vehicle_status,users.username');
         $this->db->from('vehicle_info,booking_list');
         $this->db->where('booking_list.vehicle_id = vehicle_info.vehicle_id');
         //$this->db->where('booking_list.booking_id',$order_id);
         $this->db->join('users', 'users.id = booking_list.customer_id', 'inner');
          $this->db->where('users.id',$user_id);
         $query = $this->db->get();
         return $query;  
       }
	function insert_driver($first = '',$last = '',$mobile = '',$user_id = '',$status = 0){
		$data = array(
					'service_provider_name' => $first.' '.$last,
					'phone' => $mobile,
					'driver_id' => $user_id,
					'driver_status' => $status
					);
		$this->db->insert('service_providers_list',$data);
	}

       public function viewallorders()
        {
      
         $this->db->select('*');
         $this->db->from('booking_list');
         $query = $this->db->get();
         return $query;  
        }
		public function view_unverified_payment()
        {
      
         $this->db->select('*');
         $this->db->from('transaction_info,booking_list,users');
		 $this->db->where('transaction_info.booking_id = booking_list.booking_id');
		 $this->db->where('users.id = booking_list.customer_id');
		 $this->db->where('transaction_status',0);
         $query = $this->db->get();
         return $query;  
        }
		
		public function view_verified_payment()
        {
      
			 $this->db->select('*');
			 $this->db->from('transaction_info,booking_list,users');
			 $this->db->where('transaction_info.booking_id = booking_list.booking_id');
			 $this->db->where('users.id = booking_list.customer_id');
			 $this->db->where('transaction_status != 0');
			 $query = $this->db->get();
			 return $query;  
        }

		function get_total_verified_payemnt($booking_id = 0){
			 $this->db->select('SUM(paid_amount) AS paid');
			 $this->db->from('transaction_info');
			 $this->db->where('transaction_status',1);
			 $this->db->where('booking_id',$booking_id);
			 $query = $this->db->get();
			 $row = $query->row(); 
			 return $row->paid;  
		}

       public function delete_data($user_id)
       {
        $this->db->where("id",$user_id);
        $this->db->delete("users");
       }
	    public function ban_data($user_id)
       {
		   
		 $data = array('banned' => 1);
        $this->db->where("id",$user_id);
        $this->db->update('users',$data);
       }
	    public function unban_data($user_id)
       {
		   
		$data = array('banned' => 0);
        $this->db->where("id",$user_id);
        $this->db->update('users',$data);
       }
		public function delete_cars($vehicle_id)
       {
        $this->db->where("vehicle_id",$vehicle_id);
        $this->db->delete("vehicle_info");
       }
	   public function delete_ctest($ct_id){
		   $this->db->where("c_id",$ct_id);
		   $this->db->delete("ctable");
		   
	   }
		public function delete_orders($booking_id)
       {
        $this->db->where("booking_id",$booking_id);
        $this->db->delete("booking_list");
       }
	      public function viewbannedusers()
        {
      
         $this->db->select('id,username,firstname,lastname,email,mobile,address,image_path');
         $this->db->from('users');
         $this->db->where('banned','1');
        //$this->db->update('booking_list');
         //view in cart
         $query=$this->db->get();
         return $query;   
       }

}
