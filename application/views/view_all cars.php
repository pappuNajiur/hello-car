
<?php $this->load->view('new_header');?>
<style>
.about-content {
    padding: 80px 0px;
    text-align: center;
}


.content-wrapper {
    text-align: center;
	color:Black;
	padding: 20px 3px;
}



</style>
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							All Vehicles
							</h1>	
							
						</div>											
					</div>
				</div>
			</section>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  
    <!-- Content Header (Page header) -->
    <section class="content-header">
	
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <CENTER><h3 style="color:black;">All Vehicles Info</h3></CENTER><br>
    
  <table id="example2" class="table table-bordered table-striped">
    <thead>
      <tr>
           <th style="color:black; font-size:15px;">No</th>  
           <th style="color:black; font-size:15px;">Vehicle Id</th>  
          <th style="color:black; font-size:15px;">Vehicle Name</td>
           <th style="color:black; font-size:15px;">Vehicle Rate</th>
            <th style="color:black; font-size:15px;">Vehicle Brand Id</th>
             <th style="color:black; font-size:15px;">Vehicle Status</th>
             <th style="color:black; font-size:15px;">Driver</th>
             <th style="color:black; font-size:15px;">Action</th>      
      </tr>
    </thead>
    <tbody>
      
        <?php
			$orderno = 0;
         foreach ($h->result() as $row)
					 
         {  
           $orderno++;
		   ?> 
            <tr>
			<td style="color:black; font-size:15px;"><?php echo $orderno;?></td>
            <td style="color:black; font-size:15px;"><?php echo $row->vehicle_id;?></td>  
            <td style="color:black; font-size:15px;"><?php echo $row->vehicle_name;?></td>  
            <td style="color:black; font-size:15px;"><?php echo $row->vehicle_rate;?></td>  
            <td style="color:black; font-size:15px;">
				<?php $brandid = $row->brand_id;
				$getbrnd = $this->Admin_model->getBrand($brandid);
				if (isset($getbrnd)){
				echo $getbrnd->brand_name;
				}?>
			</td> 
            <td style="color:black; font-size:15px;">
			<?php 
								  $vclid = $row->vehicle_details;
								  $getsts = $this->Admin_model->getVehicle($vclid);
								  if (isset($getsts)){
									echo $getsts->vcl_status;
								  }?>
			</td>
            <td style="color:black; font-size:15px;">
			<?php 
								  $userid = $row->driver_id;
								  $getname = $this->Admin_model->getUser($userid);
								  if (isset($getname)){
									echo $getname->username;
								  }?>
			</td>
            
           <td>
		   <a onclick="return confirm('Are you sure to Edit ?');" href="<?php echo base_url();?>Admin_controller/edit_data/<?php echo $row->vehicle_id;?>"><i class="fa fa-pencil"style="font-size:18px;color:blue"></i></a> ||
		   <a onclick="return confirm('Are you sure to Remove ?');" href="<?php echo base_url();?>Admin_controller/delete_car/<?php echo $row->vehicle_id;?>"><i  class="fa fa-trash-o" style="font-size:18px;color:red"></i></a>
			</td>
		       
            </tr>  
         <?php }  
         ?>  
     
      
    </tbody>
  </table>
          

        </section>
        
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css" type="text/css">
<script src="<?php echo base_url();?>lib/jquery-1.11.1.min.js"></script>
<!--<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>-->
<script src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>


<script>
var table = $('#example2').DataTable();
 
$('#example2 tbody').on( 'click', 'td', function () {
    //alert( table.cell( this ).data() );
} );
</script>
  <?php $this->load->view('new_footer')?>