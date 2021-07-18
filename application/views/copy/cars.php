<?php include("inc/new_header.php");?>
<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">

<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    font-size:15px; 
}

.button1 {font-size: 10px;}
.button2 {font-size: 12px;}
.button3 {font-size: 16px;}
.button4 {font-size: 20px;}
.button5 {font-size: 24px;}

</style>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

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
	margin-top:55px;
}
.content h2{color: #fff;}
#logo{margin-left: -700px;}
#nav-menu-container{float:right;margin-right: -700px;}

#active{ background: #00c0ef;}
  </style>




		<style>
		.about-content {
			padding: 80px 0px;
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
							All Drivers
							</h1>	
							
						</div>											
					</div>
				</div>
		</section>
	
<!--==============================Content=================================-->
			<div class="content">
				<div class="row">
				<!-- Left col -->
				<section class="col-lg-12 connectedSortable"><section class="col-lg-12 connectedSortable">
					<h2 class="page-header">All Drivers</h2>
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
								  <h3 class="widget-user-username"> <?php echo $row->vehicle_name;?></h3>
								  <h5 class="widget-user-desc">Vehicle ID:<?php echo $row->vehicle_id;?></h5>
								  <h5 class="widget-user-desc">Vehicle Condition: <?php echo $row->vehicle_details;?></h5>
								  
								</div>
								<div class="box-footer no-padding">
								  <ul class="nav nav-stacked">
								   <!-- <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>-->
									<li><a class="nedd_car" data-value="<?php echo $row->vehicle_id;?>" href="<?php echo base_url();?>my_controller/index?rdr=<?php echo $row->vehicle_id;?>">Need A Ride ? <span class="pull-right badge bg-aqua">Book Now</span></a></li>
									
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
				
				<nav aria-label="Page navigation example">
					<center>
					<ul class="pagination">
						<?php echo $this->pagination->create_links();?>
					</ul>
					</center>
				</nav>   

     
        
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
      
        <!-- /.col -->
      

        </section>
		
		</div>
		</div>
		
      

<!--==============================footer=================================-->



<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>















		<?php include("inc/new_footer.php");?>
