<style>
.brand {
    position: relative;
    top: -7px;
    font: 30px/18px 'Roboto Condensed', sans-serif;
    display: inline-block;
    font-size: 27px;
}
.f_phone{
	font-size:30px;
}
.footer-area {
    padding-top: 5px;
	padding-bottom: 15px;
    background-color: #04091e;
}
</style>
			<!-- start footer Area -->		
			<footer class="footer-area section-gap" style="margin-top: 50px;">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-3 col-sm-6">
							<div class="single-footer-widget">
								<div class="copy">
									<div class="st1">
									<div class="brand">Hello<span class="color1"> C</span>ar </div>
									&copy; 2021	| <a href="#">Privacy Policy</a> </div> Design & Developed By <a target="_blank" href="<?php echo base_url();?>My_controller/anas">Pappu</a> & <a target="_blank" href="<?php echo base_url();?>My_controller/muza"> Rabeya</a>
								</div>							
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6">
							<div class="single-footer-widget">
								<div class="socials">
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-facebook"></a>
								</div>					
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-6">
							<div class="single-footer-widget">
								<div class="f_phone"><span>Call Us:</span> 01719716107</div>
							</div>
						</div>												
																
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="<?php echo base_url();?>assets/frontcss/newjs/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?php echo base_url();?>assets/frontcss/newjs/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="<?php echo base_url();?>assets/frontcss/newjs/easing.min.js"></script>			
			<script src="<?php echo base_url();?>assets/frontcss/newjs/hoverIntent.js"></script>
			<script src="<?php echo base_url();?>assets/frontcss/newjs/superfish.min.js"></script>	
			<script src="<?php echo base_url();?>assets/frontcss/newjs/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontcss/newjs/jquery.magnific-popup.min.js"></script>	
			<script src="<?php echo base_url();?>assets/frontcss/newjs/owl.carousel.min.js"></script>			
			<script src="<?php echo base_url();?>assets/frontcss/newjs/jquery.sticky.js"></script>
			<script src="<?php echo base_url();?>assets/frontcss/newjs/jquery.nice-select.min.js"></script>	
			<script src="<?php echo base_url();?>assets/frontcss/newjs/waypoints.min.js"></script>
			<script src="<?php echo base_url();?>assets/frontcss/newjs/jquery.counterup.min.js"></script>					
			<script src="<?php echo base_url();?>assets/frontcss/newjs/parallax.min.js"></script>		
			<script src="<?php echo base_url();?>assets/frontcss/newjs/mail-script.js"></script>	
			<script src="<?php echo base_url();?>assets/frontcss/newjs/main.js"></script>	



<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<script>

 $.getJSON("http://localhost/Auto/Admin_controller/chart_show", function(response){

 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Chart of Hello Car"
	},
	subtitles: [{
		text: ""
	}],
	data: [{
		type: "bar",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}",
		yValueFormatString: "#,##0",
		dataPoints: response
	}]
});
chart.render();
 });

</script>

<script>

 $.getJSON("<?php echo base_url();?>Admin_controller/fidback", function(response){
s
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Hello Car: Chart"
	},
	subtitles: [{
		text: ""
	}],
	data: [{
		type: "bar",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}",
		yValueFormatString: "#,##0",
		dataPoints: response
	}]
});
chart.render();
 });

</script>


		</body>
	</html>