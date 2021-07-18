
<?php $this->load->view('new_header')?>

<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/my_css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <script src="<?php echo base_url();?>lib/jquery-1.11.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/register/css/style.css">
    <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/my_css/style.css">
  <style>
	

.page1 h3 {
    padding-top: 0px;
}


footer{
	margin-left: -15px;
    margin-right: -15px;
}
.content{
	padding-bottom:0px;
	margin-top:0px;
}
.content h2{color: #fff;}
#logo{margin-left: -700px;}
#nav-menu-container{float:right;margin-right: -700px;}

#active{ background: #00c0ef;}
  </style>




<style>
.about-content {
    padding: 65px 0px;
    text-align: center;
}
.page-header {
    text-align: center;
	color:Black;
	padding: 15px 0px;
}
.content h2 {
    color: #2b2727;
}

</style>
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							All Cars
							</h1>	
							
						</div>											
					</div>
				</div>
			</section>
			
  <div class="content">
  
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <h2 class="page-header"></h2>

      <div class="row">
        <?php  
         foreach ($viewcars->result() as $row)  
         {  
            ?>
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-thumbnail" src="<?php echo base_url();?><?php echo $row->image_path;?>" alt="Porduct Image Info" style= "width:70px; height:70px;">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">  <?php echo $row->vehicle_name;?></h3>
              <h5 class="widget-user-desc">Vehicle ID:<?php echo $row->vehicle_id;?></h5>
              <h5 class="widget-user-desc">Vehicle Condition: <?php echo $row->vehicle_details;?></h5>
			  <h5 class="widget-user-desc">Rate: <?php echo $row->vehicle_rate;?></h5>
              
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
               <!-- <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>-->
                <li><a class="nedd_car" data-value="<?php echo $row->vehicle_id;?>" href="<?php echo base_url();?>Admin_controller/putorder/<?php echo $row->vehicle_id;?>"><span class="pull-right badge bg-aqua">Book Now</span></a></li>
                
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
  
        <?php }  
         ?>
        <!-- /.col -->
      
        <!-- /.col -->
      
	  </div>
	  </section>
	  </div>
        
          <!-- /.widget-user -->
        </div>
       
  
  
  <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script>
  $('.nedd_car').click(function(clkkk){
    clkkk.preventDefault();
    var car_id = $(this).attr('data-value');
    //alert(car_id);
    
    $.ajax({
      url:'<?php echo base_url();?>Admin_controller/checkid',
      type: "POST",
      dataType: "json",
      data: {'carid' : car_id},
      success: function(result){
        if(result == 'no'){
          location.href = '<?php echo base_url();?>Admin_controller/putorder/'+car_id;
        }
        else{
          alert('The car is booked from '+result.start_date+' to '+result.end_date+'.Please select different date');
          location.href = '<?php echo base_url();?>Admin_controller/putorder/'+car_id;
        }
        
      }
    });
  });
  </script>
  
  <?php $this->load->view('new_footer')?>