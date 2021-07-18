

<?php $this->load->view('new_header')?>

		<style>
					.about-content {
						padding: 80px 0px;
						text-align: center;
					}
					.content-wrapper {
					  
						text-align: center;
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
		
			<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
				   <?php if ($message != '') { ?>
				<CENTER><h3 style="color:red;">Data inserted successfully</h3></CENTER><br>
				<?php } ?>
				
					<form action="<?php echo base_url();?>Admin_controller/vehicle_brand_entry" method="post">
							<h2>Enter Brand Details</h2>
							
						
							<p>
								<label for="brand_name" style="color: black;" class="floatLabel">Brand Name</label>
								<input id="brand_name" name="brand_name" type="text" pattern="[A-Za-z]{4,12}">
								
							</p>
							
							<!--<p>
								<label for="brand_model" style="color: black;" class="floatLabel">Brand Model</label>
								<input id="brand_model" name="brand_model" type="text">
								
							</p>-->
							
							<p>
								<label for="brand_details" style="color: black;" class="floatLabel">Brand Details</label>
								<input id="brand_details" name="brand_details" type="text">
							</p>
							
							<p>
								<input type="submit" class="btn btn-lg btn-info col-lg-4" value="Save" id="submit">
							</p>
					</form>
				
			</section>  
			
		</div>
    </div> 
				  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

				  

					<script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



				  

					<script  src="<?php echo base_url();?>assets/register/js/index.js"></script>


			   
		
        
  
  <?php $this->load->view('new_footer')?>