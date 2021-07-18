
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
  <form action="<?php echo base_url();?>Admin_controller/aboutusinsert" method="post">
  <h2>About Us</h2>
        
    <p>
      <label for="a_few_word" class="floatLabel">A Few Words About Us</label>
      <input id="a_few_word" name="a_few_word" type="text">
      
    </p>
    
    <!--
    <p>
      <label for="Vehicle_details" class="floatLabel">Why Choose Us</label>
      <input id="Vechile_details" name="vehicle_details" type="text">

    </p>

    <p>
      <label for="testimonials" class="floatLabel">Testimonials</label>
      <input id="testimonials" name="testimonials" type="text">

    </p>
-->
    

    <p>

    
    <p>
      <input type="submit" value="Send Data database" id="submit">
    </p>
  </form>
 



            
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

    
  </div>
  <?php $this->load->view('footer')?>
