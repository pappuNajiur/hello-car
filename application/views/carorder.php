<?php include("new_header.php");?>

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
	text-align: center;
}
.content h2{color: #fff;}
#logo{margin-left: -700px;}
#nav-menu-container{float:right;margin-right: -700px;}

#active{ background: #00c0ef;}
  </style>




		<style>
	
		.page-header {
			text-align: center;
			color:Black;
			padding: 0px 0px;
		}
		.content h2 {
			color: #2b2727;
		}
		img{
			border-radius:30px;
		}
		</style>
		<style>
				.card {
				  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				  max-width: 300px;
				  margin: auto;
				  text-align: center;
				  font-family: arial;
				
				}
				
				button {
				  border: none;
				  outline: 0;
				  display: inline-block;
				  padding: 8px;
				  color: white;
				  background-color: #000;
				  text-align: center;
				  cursor: pointer;
				  width: 100%;
				  font-size: 18px;
				}

				

				button:hover, a:hover {
				  opacity: 0.7;
				}
				.myrow{
					min-height: 43px;
					line-height: 31px;
					margin-top:5px;
				}
				
	</style>
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h3 class="text-white">
							All Cars
							</h3>	
							
						</div>											
					</div>
				</div>
		</section>
	
  <div class="content">
  
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
		<h2 class="page-header" style="padding:0px;margin:0px;"></h2>
			<div class="row myrow">
				<div class="col-md-2">Select Brand: </div>
				<div class="col-md-2"><?php echo form_dropdown('brand',$brand_info,$this->uri->uri_string(),'class="form-control" style="height:36px;" id="the_select"');?></div>
			</div>
<script type="text/javascript">
$(function(){
  $("#the_select").change(function(){
    window.location=this.value;
  });
});
</script>
      <div class="row">
        <?php  
         foreach ($viewcars->result() as $row)  
         {  
            ?>
        <div class="col-md-4">
		
		<div class="card">
		<div>
                <?php if(getimagesize(base_url().$row->image_path)){?>
									<img src="<?php echo base_url();?><?php echo $row->image_path;?>" alt="img" style= "width:250px; height:150px;">
									<?php } else{?>
             <img src="<?php echo base_url();?>assets/image_path/democar.png" alt="img" style= "width:250px; height:150px;">
									<?php } ?>
									
              <h3 class="widget-user-username">  <?php echo $row->vehicle_name;?></h3>
              <h5 class="widget-user-desc">Vehicle ID:<?php echo $row->vehicle_id;?></h5>
              <h5 class="widget-user-desc">Vehicle Condition: <?php 
								  $vclid = $row->vehicle_details;
								  $getsts = $this->Admin_model->getVehicle($vclid);
								  if (isset($getsts)){
									echo $getsts->vcl_status;
								  }?>
								</h5>
			  
			  <!--<h5 class="widget-user-desc">Rate: <?php //echo $row->vehicle_rate;?></h5> -->
              
            </div>
            <div>
               <p><button><a style="color:white;" data-value="<?php echo $row->vehicle_id;?>" href="<?php echo base_url();?>Admin_controller/putorder/<?php echo $row->vehicle_id;?>">Book Now</a></button></p>
                
              
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
  
        <?php }  
         ?>
        <!-- /.col -->
		</div>
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