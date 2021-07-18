

<?php include("inc/new_header.php");?>
<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact Us
							</h1>	
							<p class="text-white link-nav"><a href="<?php echo base_url();?>">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?php echo base_url();?>My_controller/allcars"> Contact Us</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start contact-page Area -->
			
								<div class="contact-details">
									<h5>Sylhet, Bangladesh</h5>
									<p>Amberkhana</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>+8801719716107<h5>
									<p>Saturday to Thursaday 10am to 6 pm</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>support@hellocar.com</h5>
									<p>Send us your query anytime!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="required" type="text">
									
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="required" type="email">

										<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="required" type="text">
										<div class="mt-20 alert-msg" style="text-align: left;"></div>
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required="required"></textarea>
										<button class="primary-btn mt-20 text-white" style="float: right;">Send Message</button>
																				
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

	<script src="<?php echo base_url();?>lib/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/sweetalert.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/my_css/sweetalert.css">
	<script>
		$('#myForm').on('submit',function(evvnt){
			evvnt.preventDefault();
			$.ajax({
				url: '<?php echo base_url();?>my_controller/sent_email',
                dataType: 'json',
                type: 'post',
                data: $(this).serialize(),
                success: function( result ){
					if(result == 'ok'){
				
						swal('Email Sent','Success','success');
					}
					else{
						swal('Something Error','Error','error');
					}
                }
			});
			
			
			
		});
	</script>
			
			
			
<!--==============================footer=================================-->
		<?php include("inc/new_footer.php");?>