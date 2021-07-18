
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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <?php if ($message != '') { ?>
<CENTER><h3 style="color:red;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
  <form action="<?php echo base_url();?>Admin_controller/vehicle_entry" method="post">
  <h2>Enter Vehicle Details</h2>
		
	
		<p>
			<label for="Vechile_name" class="floatLabel">Vechile Name</label>
			<input id="Vechile_name" name="vehicle_name" type="text">
			
		</p>
		<p>
			<label for="Vechile_rate" class="floatLabel">Vechile Rate</label>
			<input id="Vechile_rate" name="vehicle_rate" type="text">Per Day
			
		</p>
		
		<p>
				  <label for="Vehicle_brand_name" style="color: black;" class="floatLabel">Vehicle Brand Name</label>
				  <?php echo form_dropdown('brand_id',$brnd_info,'','');?>
				</p>
		
		<p>
			<label for="Vechile_model" class="floatLabel">Vechile Model</label>
			<input id="Vechile_model" name="vechile_model" type="text">
		</p>
		
		<p>
			<input type="submit" value="save" id="submit">
		</p>
	</form>
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