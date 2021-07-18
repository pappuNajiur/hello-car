
<?php $this->load->view('new_header')?>

		<style>
					.about-content {
						padding: 80px 0px;
						text-align: center;
					}
					.content-wrapper {
					  
						
						padding: 5% 0px;
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
							Mr <span><?php echo $this->tank_auth->get_username();?>
							</h1>	
							
						</div>											
					</div>
				</div>
			</section>



			
<div class="content-wrapper">
   
   
    <div class="row">
	  
        <section class="col-lg-12 connectedSortable">
		
					  <?php if ($message != '') { ?>
			<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
			<?php } ?>
			  <form action="<?php echo base_url();?>Admin_controller/vehicle_setup" method="post" enctype="multipart/form-data">
			  <h3>Enter Vehicle Details</h3>
					
				<p>
				  <label for="Vechile_name" style="color: black;" class="floatLabel">Vechile Name</label>
				  <input id="vehicle_name" name="vehicle_name" type="text">
				  
				</p>
				<p>
						<label for="Vehicle_rate" style="color: black;" class="floatLabel">Vechile Rate</label>
						<input id="Vehicle_rate" name="vehicle_rate" type="text">BDT Per Day
				</p>
				
				<p>
				  <label for="Vehicle_brand_name" style="color: black;" class="floatLabel">Vehicle Brand Name</label>
				  <?php echo form_dropdown('brand_id',$brnd_info,'','');?>
				  <input id="" name=""  type="text">
				  <!--<button class="btn btn-lg btn-info col-lg-6"><a Style="color:white;" href="<?php echo base_url();?>Admin_controller/vehicle_brand_entry">Add Brand</a></button>-->
				</p>
				
				
				<p>
					<label for="Vehicle_details" class="floatLabel">Vehicle Details</label>
					<?php echo form_dropdown('vehicle_details',$Status_info,'','');?>
				</p>
				
				<p>
					<label for="Vehicle_plate" style="color: black;" class="floatLabel">Vechile Plate No</label>
					<input id="Vehicle_plate" name="vehicle_plate"  type="text">
				</p>
				<p>
					<label for="Air_Condition"style="color: black;" class="floatLabel">Air Condition</label>
					<select name="aircondition"  >
						<option value="Yes">Yes</option>
						<option value="No">No</option>

					</select>
				</p>

			

				<p>
				  <label for="Vehicle_img" class="floatLabel">Upload Image</label>
				  <input id="Vechile_img" name="image_path" type="file">
				</p>

				<p>

				  <input id="vehicle_status" name="vehicle_status" value="1" type="hidden">
				</p>

				<p>
				  
				  <input id="driver_id" name="driver_id" value="" type="hidden">
				</p>
				
				<p>
				  <input type="submit" class="btn btn-lg btn-info col-lg-6" value="Add Vehicle" id="submit">
				</p>
			</form>
		  
		</section>
		  
				
          

        
   
      </div>
     

</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

		  

			<script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



		  

			<script  src="<?php echo base_url();?>assets/register/js/index.js"></script>
   
 
  <?php $this->load->view('new_footer')?>
