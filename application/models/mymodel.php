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
   
	
  public function brand_list() 
  {
        $query = $this->db->get('brand_setup');
        $brand[''] = 'Select A Brand';
        foreach ($query->result() as $row) {
          $brand[$row->brand_id] = $row->brand_name;
        }
        return $brand;
  }
	
	public function viewcarinfo()
  {
      
         //data is retrive from this query  
         $query = $this->db->get('vehicle_info');  
         return $query;  
       }


       public function viewcustomer()
        {
      
         $this->db->select('id,firstname,lastname,email,mobile,address');
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
      
         $this->db->select('firstname,lastname,email,mobile,address,image_path');
         $this->db->from('users');
         $this->db->where('user_type','driver');
        //$this->db->update('booking_list');
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

	
public function vehiclename($vehicle_id)
{
$this->db->select('vehicle_name,vehicle_id');
$this->db->from('vehicle_info');
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
  $this->db->select('booking_id');
  $this->db->from('booking_list');
  $this->db->where('vehicle_id',$vehicle_id);
  $this->db->where('start_date <= ',$start_date);
  $this->db->where('end_date >=',$end_date);
  $this->db->or_where('start_date >= ',$start_date);
  $this->db->where('end_date >=',$end_date);
  $this->db->where('vehicle_status',$status);
  
  $query = $this->db->get();
  if($query->num_rows() >0)
  {
    return $query->row();
  }
  else{
    return FALSE;
}
}



public function vieworderinfo()
  {
      
         $this->db->select('vehicle_info.vehicle_name,booking_list.booking_id,booking_list.start_date,booking_list.end_date,users.username');
         $this->db->from('vehicle_info');
         $this->db->join('booking_list', 'vehicle_info.vehicle_id =booking_list.vehicle_id', 'inner');
         $this->db->join('users', 'users.id = booking_list.customer_id', 'inner');
         $query = $this->db->get();
         return $query;  
       }

       public function displayorderinfo($order_id)
  {
      
         $this->db->select('vehicle_info.vehicle_name,booking_list.start_date,booking_list.end_date,users.username');
         $this->db->from('vehicle_info,booking_list');
         $this->db->where('booking_list.vehicle_id = vehicle_info.vehicle_id');
         $this->db->where('booking_list.booking_id',$order_id);
         $this->db->join('users', 'users.id = booking_list.customer_id', 'inner');
         $query = $this->db->get();
         return $query;  
       }



       public function viewallorderinfo($user_id)
  {
      
         $this->db->select('vehicle_info.vehicle_name,booking_list.start_date,booking_list.end_date,users.firstname,users.mobile');
         $this->db->from('vehicle_info');
         $this->db->join('service_providers_list', 'vehicle_info.driver_id=service_providers_list.driver_id', 'inner');
         $this->db->join('booking_list', 'vehicle_info.vehicle_id =booking_list.vehicle_id', 'inner');
         $this->db->join('users', 'users.id = booking_list.customer_id', 'inner');
         $this->db->where('service_providers_list.driver_id',$user_id);
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


       public function delete_data($user_id)
       {
        $this->db->where("id",$user_id);
        $this->db->delete("users");
       }


}
