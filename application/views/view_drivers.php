
<?php $this->load->view('new_header');?>
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





  <!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
		
			
			
			<!-- Cart CSS -->
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				
					
					<body>
					<section class="col-lg-12 connectedSortable"><section class="col-lg-12 connectedSortable">
					<h2 class="page-header">All Drivers</h2>

						<div class="box-body">
						<div class="row">
								<?php  
						 foreach ($h->result() as $row)  
						 {  
							?>
							<div class="col-md-3"> 

								<div class="card">
								
								
								<?php if(getimagesize(base_url().$row->image_path)){?>
								  <img src="<?php echo base_url();?><?php echo $row->image_path;?>" alt="img" style= "width:250px; height:180px;"">
								  <?php } else{?>
					  
									  <img src="<?php echo base_url();?>assets/image_path/profiledemo.jpg" alt="img" style="width:100%;;">
									<?php } ?>
								  
								  <h2><?php echo $row->firstname.' '.$row->lastname;?></h2>
								  <p class="title">Driver, <?php echo $row->address;?></p>
								  <p><?php echo $row->email;?></p>
								  
								  <p><button><?php echo $row->mobile?></button></p>
								 
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
				img{
					border-radius: 50px;
					margin-left: auto;
					margin-right: auto;
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