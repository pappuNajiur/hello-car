
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
          <!-- Custom tabs (Charts with tabs)-->
          <?php if ($message != '') { ?>
<CENTER><h3 style="color:red;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
  <form action="<?php echo base_url();?>Admin_controller/vehicle_setup" method="post" enctype="multipart/form-data">
  <h2>Enter Vehicle Details</h2>
        
    <p>
      <label for="Vechile_name" class="floatLabel">Vechile Name</label>
      <input id="vehicle_name" name="vehicle_name" type="text">
      
    </p>
    
    <p>
      <label for="Vehicle_brand_name" class="floatLabel">Vehicle Brand Name</label><br><br>
      <?php echo form_dropdown('brand_id',$brnd_info,'','');?>
    </p>
    
    
    <p>
      <label for="Vehicle_details" class="floatLabel">Vehicle Details</label>
      <input id="Vechile_details" name="vehicle_details" type="text">
    </p>

    <p>
      <label for="Vehicle_img" class="floatLabel">Upload Image</label><br><br>
      <input id="Vechile_img" name="image_path" type="file">
    </p>

    <p>

    
      
      <input id="vehicle_status" name="vehicle_status" value="1" type="hidden">
    </p>

    <p>
      
      <input id="driver_id" name="driver_id" value="" type="hidden">
    </p>
    
    <p>
      <input type="submit" value="Send Data database" id="submit">
    </p>
  </form>
  


  </div>
</div>
</section>
</div>
</section>
</div>



            
            <!-- /.box-header -->
            <!-- form start -->
            
          <!-- /.box -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
 
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
    
          <!-- /.box -->

          <!-- quick email widget -->
          

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
