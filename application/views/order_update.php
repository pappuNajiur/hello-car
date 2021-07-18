
<?php $this->load->view('new_header');?>
<style>
.about-content {
    padding: 80px 0px;
    text-align: center;
}


.content-wrapper {
    text-align: center;
	color:Black;
	padding: 80px 5px;
}
form {	

background: #fff;
padding: 4em 4em 2em;
max-width: 400px;
margin: 0px auto 0;
box-shadow: 0 0 1em #222;
border-radius: 2px;
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

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
    
    <?php if ($message != '') { ?>
    <CENTER><h3 style="color:green;">Order updated successfully</h3></CENTER><br>
<?php } ?>

<?php if(isset($order_infos))
  {
    foreach ($order_infos->result() as $row) 
    {
        
    ?>
  <form action="<?php echo base_url();?>Admin_controller/updatorder/<?php echo $this->uri->segment(3);?>" method="post">
  <?php if ($message != '') { ?>
    <CENTER><h3 style="color:green;">Order updated successfully</h3></CENTER><br>
<?php } ?>
  <h2>Order Update</h2>
		
    <p>
      <label for="start_date" class="floatLabel">Start Date</label>
      <input id="start_date" name="start_date" value="<?php echo $row->start_date;?>" type="date">
      
    </p>

		<p>
			<label for="end_date" class="floatLabel">End date</label>
			<input id="end_date" name="end_date" value="<?php echo $row->end_date;?>" type="date"> 
			
		</p>

    <p>
      <label for="vehicle_status" class="floatLabel">Order Status</label>
      <!--<input id="vehicle_status" name="vehicle_status" value="<?php //echo $row->vehicle_status;?>" type="text"> -->
      <?php 
        $darr = array('Active'=>'Active','Pending'=>'Pending','Cancelled'=>'Cancelled');
      echo form_dropdown('vehicle_status',$darr,$row->vehicle_status,'');?>
    </p>
		

		<p>
			<input type="submit" class="btn btn-lg btn-info col-lg-4" value="Submit" id="submit">
		</p>
	</form>
  <?php
}
  }
?>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>


          

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view('new_footer')?>