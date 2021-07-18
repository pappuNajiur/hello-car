

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
    <CENTER><h3 style="color:red;">Order placed successfully</h3></CENTER><br>
    
<?php } ?>



<!--<?php if(isset($vehicle_infos))
  {
    foreach ($vehicle_infos->result() as $row) 
    {
        
    ?>
  <form action="<?php echo base_url();?>Admin_controller/putorder2" method="post">
  <h2>Put Your Order</h2>
		
	
		<p>
			<label for="vehicle_id" class="floatLabel">Vehicle Name</label>
			<input id="vehicle_name" name="vehicle_name" value="<?php echo $row->vehicle_name;?>" type="text">
			
		</p>

    <p>
      <label for="vehicle_id" class="floatLabel">Vehicle ID</label>
      <input id="vehicle_name" name="vehicle_id" value="<?php echo $row->vehicle_id;?>" type="hidden">
      
    </p>

		<p>
			<label for="customer_id" class="floatLabel">Customer Id</label>
			<input id="customer_id" name="customer_id" type="text" value="<?php echo $this->tank_auth->get_user_id();?>">
			
		</p>
		
		<p>
			<label for="start_date">Start Date</label><br><br>
			<input id="start_date" name="start_date" type="date">
		</p>
		
    <p>
      <label for="end_date" class="floatLabel">End date</label><br> <br>
      <input id="end_date" name="end_date" type="date">
    </p>

    

		<p>
			<input type="submit" value="Send To Database" id="submit">
		</p>
	</form>
  <?php
}
  }
?>-->
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