<?php $this->load->view('new_header')?>

<style>
.about-content {
    padding: 80px 0px;
    text-align: center;
}
.content-wrapper {
  
	
	padding:  100px;
}

</style>
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h3 class="text-white">
							Hello Car
							</h3>	
							
						</div>											
					</div>
				</div>
			</section>
 <div class="content-wrapper">
  <?php if($this->tank_auth->get_user_type() == 'admin'){?>
  
  <?php }?>
  
  <?php if($this->tank_auth->get_user_type() == 'driver'){?>
  <?php $this->load->view('chart_driver')?>
  <?php }?>
  
  <?php if($this->tank_auth->get_user_type() == 'customer'){?>
  <?php $this->load->view('customer_order')?>
  <?php }?>
 
    
	
	 
 
	
	
	

    
    <!-- /.content -->
  </div>
  <?php $this->load->view('new_footer')?>