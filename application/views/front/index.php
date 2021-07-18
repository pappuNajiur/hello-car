
<?php $this->load->view('front/inc/new_header');?>
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						
						<div class="col-lg-5  col-md-6 header-right">
							<h4 class="text-white pb-30">Book Your Car Now!</h4>
							<form class="form" method="post" role="form" autocomplete="off" action="<?php echo base_url();?>auth/login">		    
							    <div class="from-group">
							    	<input class="form-control txt-field" type="text" name="login" placeholder="Email Or User">
							    	<input class="form-control txt-field" type="password" name="password" placeholder="Password">
									<input type="hidden" name="rdr" value="<?php echo $rdr;?>">
							    </div>
							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Login</button>
							        </div>
									<div class="col-md-12" style="color:#fff;">
							            Don't Have an account?<a href="<?php echo base_url();?>auth/register" class="btn btn-default btn-lg btn-block text-center text-uppercase">Register Now</a>
							        </div>
							    </div>
							</form>
						</div>	

						<div class="banner-content col-lg-7 col-md-6 " >
							<h6 class="text-white" style="text-align: right;">The comfort zone of journey</h6>
							<h1 style="text-align: right;" class="text-white text-uppercase">
								Let's go for a trip				
							</h1>
							<p style="text-align: right;" class="pt-20 pb-20 text-white">
								
							</p>
							<p style="text-align: right;"><a href="<?php echo base_url();?>My_controller/allcars" class="primary-btn text-uppercase">Rent Now</a></p>
						</div>
																
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

				<section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Our Services</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>Hourly Car Rental</h4>
								<p>
								You can easily rent the cars of your choice for visiting any spot you want. 
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Daily Basis Car Rent</h4>
								<p>
								Thinking about Renting a Car daily basis for exploring Bangladesh.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									We are always here for any kind of support related to car rental through our contact page.
								</p>								
							</div>
						</div>
															
							</div>
						</div>						
					</div>
				</div>	
			</section>	

								

		
			<!-- End reviews Area -->
<?php $this->load->view('front/inc/new_footer');?>