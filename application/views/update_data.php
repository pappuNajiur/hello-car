
<?php $this->load->view('new_header');?>
<style>



.content-wrapper {
    text-align: center;
	color:Black;
	padding: 80px 0px;
}
.about-content {
    padding: 80px 0px;
    text-align: center;
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">


	<?php if ($message != '') { ?>
<CENTER><h3 style="color:red;">Data updated successfully</h3></CENTER><br>
<?php } ?>

<?php if(isset($vehicle_data))
	{
		foreach ($vehicle_data->result() as $row) 
		{
				
		?>
		<form action="<?php echo base_url();?>Admin_controller/updatevehicle" method="post">
  <h2>Sign Up</h2>
		
	      
		<p>
			<label for="Vechile_name" class="floatLabel" >Vechile Name</label>
			<input id="vehicle_name" name="vehicle_name" value="<?php echo $row->vehicle_name;?>" type="text">
			
		</p>
		<p>
			<label for="Vechile_rate" class="floatLabel" >Vechile Rate</label>
			<input id="vehicle_rate" name="vehicle_rate" value="<?php echo $row->vehicle_rate;?>" type="text">
			
		</p>
			<input type="hidden" name="vehicle_id" value="<?php echo $vehicle_id;?>">
		<p>
			<label for="Vehicle_brand_name" class="floatLabel">Vehicle Brand Name</label>
			<?php echo form_dropdown('brand_id',$brnd_info,$row->brand_id,'');?>
			
			
		</p>
		
		
		<p>
			<label for="Vehicle_details" class="floatLabel">Vehicle Details</label>
			<input id="Vechile_details" name="vehicle_details" value="<?php echo $row->vehicle_details;?>" type="text">
		</p>
		
		<p>
			<input type="submit"class="btn btn-lg btn-info col-lg-4" value="update" id="submit">
		</p>
	</form>
<?php
}
	}
?>
</section>
</div>
</section>
</div>

  

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



<?php $this->load->view('new_footer')?>