<?php include("inc/new_header.php");?>


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
			<<div class="content-wrapper">
		
			
			
			<!-- Cart CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				
					
					<body>
					<section class="col-lg-12 connectedSortable"><section class="col-lg-12 connectedSortable">
					<h2 class="page-header">All Cars</h2>

						<div class="box-body">
						<div class="row">
							<?php  
							 foreach ($viewcars->result() as $row)  
							 {  
								?>
							<div class="col-md-3"> 

								<div class="card">
								  <img src="<?php echo base_url();?><?php echo $row->image_path;?>" alt="img" style="width:100%;;">
								  <h1><?php echo $row->vehicle_name;?></h1>
								  <h1>Vehicle ID:<?php echo $row->vehicle_id;?></h1>
								  
				
								  
								  <p><button>Vehicle Rate:<?php echo $row->vehicle_rate.'/Per Day';?></button></p>
								</div>  
							</div>  
						 <?php }  
						 ?>  
								
								
						
						</div>
						</div>
						</section>
					</body>
							
				
			
		</div>
		<style>
				.card {
				  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				  max-width: 300px;
				  margin: auto;
				  text-align: center;
				  font-family: arial;
				}

				.title {
				  color: grey;
				  font-size: 18px;
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

				a {
				  text-decoration: none;
				  font-size: 22px;
				  color: black;
				}

				button:hover, a:hover {
				  opacity: 0.7;
				}
	</style>
			

  
  <?php $this->load->view('new_footer');?>