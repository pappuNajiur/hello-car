<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<script src="<?php echo base_url();?>assets/frontcss/js/jquery.js"></script>
		<script src="<?php echo base_url();?>assets/frontcss/js/jquery-migrate-1.2.1.js"></script>
		<script src="<?php echo base_url();?>assets/frontcss/js/script.js"></script>
		<script src="<?php echo base_url();?>assets/frontcss/js/superfish.js"></script>
		<script src="<?php echo base_url();?>assets/frontcss/js/jquery.ui.totop.js"></script>
		<script src="<?php echo base_url();?>assets/frontcss/js/jquery.equalheights.js"></script>
		<script src="<?php echo base_url();?>assets/frontcss/js/jquery.mobilemenu.js"></script>
		<script src="<?php echo base_url();?>assets/frontcss/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo base_url();?>assets/frontcss/js/owl.carousel.js"></script>
		<script src="<?php echo base_url();?>assets/frontcss/js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="<?php echo base_url();?>assets/frontcss/js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="<?php echo base_url();?>assets/frontcss/booking/js/booking.js"></script>
		<script src="<?php echo base_url();?>assets/frontcss/js/jquery.easing.1.3.js"></script>
		<script src="<?php echo base_url();?>assets/frontcss/js/TMForm.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>

		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '28.28125%',
					caption: true,
					navigation: true,
					fx: 'mosaic'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span>Call Us:</span> +8801719716107/div>
					<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
						
					</div>
					<div class="copy">
						<div class="st1">
						<div class="brand">Tour<span class="color1">T</span>axi </div>
						&copy; 2021	| <a href="#">Privacy Policy</a> </div> Design & Developed By <a href="">Pappu & Rabeya</a>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>