
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>lib/jquery.dataTables.css"/>
<?php $this->load->view('new_header')?>

			<style>
			.about-content {
				padding: 80px 0px;
				text-align: center;
			}
			.content-wrapper {
			  
				
				padding: 5% 0px;
			}

			</style>
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							Mr <span><?php echo $this->tank_auth->get_username();?>
							</h1>	
							
						</div>											
					</div>
				</div>
			</section>
  <div class="content-wrapper">
     
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
         
		  <CENTER><h3><?php echo $this->tank_auth->get_username();?>'s Vehicle</h3></CENTER><br>
    
  <table class="table" id="anas">
  
		  <thead>
			<tr>
				<th>NO</th>
			  <th>Vehicle Name</th>
			  <th>Vehicle Brand Id</th>
			  <th>Vehicle Details</th>
			
			</tr>
		  </thead>
 
			<tbody>
				<?php 
				$i = 0;		
				 foreach ($drivercar->result() as $row)  
				 {  
				 $i++;
				?>
				<tr>  
					
					 <td><?php echo $i; ?></td>
					<td><?php echo $row->vehicle_name;?></td>  
					<td><?php $brandid = $row->brand_id;
								  $getbrnd = $this->Admin_model->getBrand($brandid);
								  if (isset($getbrnd)){
									echo $getbrnd->brand_name;
								  }?></td> 					
					<td><?php 
								  $vclid = $row->vehicle_details;
								  $getsts = $this->Admin_model->getVehicle($vclid);
								  if (isset($getsts)){
									echo $getsts->vcl_status;
								  }?></td>
					<!-- <td><img class="img-thumbnail" src="<?php echo base_url();?><?php echo $row->image_path;?>" alt="" style= "width:70px; height:70px;"> </td> -->
					</tr>  
				 <?php }  
				 ?>  
			 
			  
			</tbody>
  </table>
  
        
          

        </section>
     
      </div>
    

    </section>
    
  </div>

  <?php $this->load->view('new_footer')?>