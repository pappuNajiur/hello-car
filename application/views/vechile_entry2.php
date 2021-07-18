
<?php $this->load->view('header')?>
<?php $this->load->view('sidebar')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   <?php $this->load->view('content')?>
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
			<label for="Vechile_name" class="floatLabel">Vechile Name22</label>
			<input id="Vechile_name" name="vehicle_name" type="text">
			
		</p>
		<p>
			<label for="Vehicle_rate" class="floatLabel">Vechile Rate</label>
			<input id="Vehicle_rate" name="vehicle_rate" type="text">Per Day
		</p>

    <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
		
		<p>
			<label for="Vechile_brand" class="floatLabel">Vechile Brand</label>
			<input id="Vechile_brand" name="vechile_brand" type="text">
			
		</p>
		
		<p>
			<label for="Vechile_model" class="floatLabel">Vechile Model</label>
			<input id="Vechile_model" name="vechile_model" type="text">
		</p>
		
		<p>
			<input type="submit" value="Send To Database" id="submit">
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
  <?php $this->load->view('footer')?>