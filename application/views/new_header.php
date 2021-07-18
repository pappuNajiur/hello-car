	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Hello Car</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url();?>assets/frontcss/newcss/linearicons.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/frontcss/newcss/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/frontcss/newcss/bootstrap.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/frontcss/newcss/magnific-popup.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/frontcss/newcss/nice-select.css">					
			<link rel="stylesheet" href="<?php echo base_url();?>assets/frontcss/newcss/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="<?php echo base_url();?>assets/frontcss/newcss/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/frontcss/newcss/main.css">
			<link rel="stylesheet" href="<?php echo base_url();?>assets/my_css/style.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/frontcss/newcss/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
					  
					  <!-- Admin -->
					  <?php if($this->tank_auth->get_user_type() == 'admin'){?>
				        <ul class="nav-menu">
						<li>
							<?php if($this->tank_auth->get_user_type() == 'admin' ){?>

							<a style="color:silver;font-size:large;">Admin</a>
							<?php }?>
						</li>
							<li class="current">
								<a href="<?php echo base_url();?>Admin_controller">Home</a>
							</li>
							
							<li class="menu-has-children"><a href="">View pages</a>
								<ul>
								<li><a href="<?php echo base_url();?>Admin_controller/viewcars">All Vehicles</a></li>
								 <li><a href="<?php echo base_url();?>Admin_controller/viewcustomers">All Users</a></li>
								 
								 <li><a href="<?php echo base_url();?>Admin_controller/viewcartdrivers">View Driver</a></li>
								 
								 <li><a href="<?php echo base_url();?>Admin_controller/vieworders">All Orders</a></li>
								 <li><a href="<?php echo base_url();?>Admin_controller/bannedusers">Banned Users</a></li>
								  
								</ul>
							</li>
							
							<li class="menu-has-children"><a href="">Account Area</a>
								<ul>
								<li><a href="<?php echo base_url();?>Admin_controller/view_unverified_payment">View Unverified Payment</a></li>
								 <li><a href="<?php echo base_url();?>Admin_controller/view_verified_payment">View Verified Payment</a></li>
								  
								</ul>
							</li>
							
							<!--<li><a  href="<?php// echo base_url();?>Admin_controller/view_test">TEST</a></li>
								
							<li><a  href="<?php //echo base_url();?>Admin_controller/view_data">View Data</a></li>
							<li>
								
								<li><a href="<?php //echo base_url();?>Admin_controller/viewdrivers">All Drivers</a></li>
							</li>-->
							
							<li>
							
							<!--<li>
								
								<li><a href="<?php //echo base_url();?>Admin_controller/edit_customers">Profile</a></li>
							</li>-->
							
							<li>
								<a href="<?php echo base_url();?>auth/logout">Sign Out</a>
							</li>	
				           			          
				        </ul>
					  <?php }?>
					  
					  <!-- Driver -->
					  
					  <?php if($this->tank_auth->get_user_type() == 'driver'){?>
					  
				        <ul class="nav-menu">
						<li>
							<?php if($this->tank_auth->get_user_type() == 'driver' ){?>

							<a style="color:silver;font-size:large;">Driver</a><?php }?>
						</li>
							<li class="current">
								<a href="<?php echo base_url();?>Admin_controller">Home</a>
							</li>
							<li>
								<a href="<?php echo base_url();?>My_controller/viewdrivercars">My vehicles</a>
							</li>
							<li>
								<a href="<?php echo base_url();?>Admin_controller/displaytrip">My orders</a>
							</li>
							<li>
								<a href="<?php echo base_url();?>Admin_controller/driverinfo">Update Info</a>
							</li>
							
						
							<!--<li><a href="<?php echo base_url();?>Admin_controller/vehicle_brand_entry">Brand Setup</a></li>-->
							<li><a href="<?php echo base_url();?>Admin_controller/vehicle_setup">Add Vehicle</a></li>
								  
								
							</li>
							<!--<li>
								
								<li><a href="<?php echo base_url();?>Admin_controller/edit_customers">Profile</a></li>
							</li>-->
							<li>
								<a href="<?php echo base_url();?>auth/logout">Sign Out</a>
							</li>
				           			          
				        </ul>
					  <?php }?>
					  
					  <!-- Customer -->
					  
						<?php if($this->tank_auth->get_user_type() == 'customer'){?>
				        <ul class="nav-menu">
						<li>
						<?php if($this->tank_auth->get_user_type() == 'customer' ){?>

						<a style="color:silver;font-size:large;">Customer</a><?php }?>
						</li>
							<li class="current">
								<a href="<?php echo base_url();?>My_controller/ordercar">Home</a>
							</li>
							
							<li>
								<a href="<?php echo base_url();?>My_controller/ordercar">Order a Car </a>
							</li>
							<li>
								<a href="<?php echo base_url();?>Admin_controller/displaytrip">My orders</a>
							</li>
							<!--<li>
								
								<li><a href="<?php //echo base_url();?>Admin_controller/edit_customers">Profile</a></li>
							</li>-->
							<li>
								<a href="<?php echo base_url();?>auth/logout">Sign Out</a>
							</li>	
				           			          
				        </ul>
					  <?php }?>
						
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
