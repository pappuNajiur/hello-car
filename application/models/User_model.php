<?php


class User_model extends CI_Model
{
	
	
	public function count_cars() 
	{
		$query = $this->db->get('vehicle_info');  
         return $query->num_rows();
	}

    public function fetchcars($brand = '') 
    {
		
		if($brand != '' && $brand != 'null')$this->db->where('brand_id',$brand);
        $query = $this->db->get('vehicle_info');  
         return $query;
    }
	function get_brand(){
		$q = $this->db->get('brand_setup');
		$data[''] = 'Select A Brand For Search Car';
		$data[base_url().'My_controller/ordercar/null'] = 'All';
		foreach($q->result() as $row){
			$data[base_url().'My_controller/ordercar/'.$row->brand_id]= $row->brand_name;
		}
		return $data;
	}
	function get_brand2(){
		$q = $this->db->get('brand_setup');
		$data[''] = 'Select A Brand For Search Car';
		$data[base_url().'My_controller/allcars/null'] = 'All';
		foreach($q->result() as $row){
			$data[base_url().'My_controller/allcars/'.$row->brand_id]= $row->brand_name;
		}
		return $data;
	}
	public function fetchcar($uri,$per) 
	{
		$this->db->from('vehicle_info');
		$this->db->limit($per,$uri);
		$query = $this->db->get();  
         return $query;
	}

  public function fetchcars2() 
  {
    $this->db->select('vehicle_info.vehicle_name,vehicle_info.vehicle_id,vehicle_info.image_path,vehicle_info.vehicle_details,booking_list.start_date,booking_list.end_date');
         $this->db->from('vehicle_info');
         $this->db->join('booking_list', 'vehicle_info.vehicle_id =booking_list.vehicle_id', 'inner');
         //$this->db->where('vehicle_info.vehicle_id',$vehicle_id);
         $query = $this->db->get();
         return $query;  
       }
  





function do_upload($image_file,$id) {
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
            $filename = $_FILES["image_path"]["name"];

            $up_data = array('image_path' => 'assets/image_path/'.$filename);
			$this->db->where('id',$id);
			$this->db->update('users',$up_data);

            return $data;
            //$this->load->view('upload_success', $data);
        }  
    }



public function serviceprovider($data) 
  {
  	//print_r($data);
     $ins_data = array(
     					'service_provider_name'=>$data['username'],
     					'phone'=>$data['mobile'],
     					'driver_id'=>$data['user_id']
     					);
    $this->db->insert('service_providers_list',$ins_data);    
    //return true;
  }


public function drivercar($user_id) 
    {
        $this->db->where('driver_id',$user_id);
        $query = $this->db->get('vehicle_info');
        //$this->db->where('user_id',$user_id);  
         return $query;
    }



}