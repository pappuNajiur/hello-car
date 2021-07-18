<?php include("front/inc/new_header.php");?>

<style>

.content-wrapper {
  
	
	padding:  20px;
}
.home_banner_area .banner_inner {
    position: relative;
    width: 80%;
    min-height: 400px;
    display: flex;
}
.home_banner_area .box_1620 {
    min-height: 400px;
    border-radius: 12px;
    position: relative;
    bottom: 0px;
    background: #fff;
    padding: 30px;
    box-shadow: 0px 20px 80px 0px rgba(153, 153, 153, 0.3);
}
.home_banner_area .banner_inner .banner_content {
    color: #222222;
    vertical-align: middle;
    align-self: center;
    text-align: left;
}
.media {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
}
.home_banner_area .banner_inner .banner_content .media .d-flex {
    padding-right: 125px;
}
.home_banner_area .banner_inner .banner_content {
    color: #222222;
    vertical-align: middle;
    align-self: center;
    text-align: left;
}
.d-flex {
    display: -ms-flexbox !important;
    display: flex !important;
}
.personal_text h6 {
    font-size: 14px;
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    letter-spacing: 2.1px;
    font-weight: normal;
    margin-bottom: 12px;
    color: #222222;
}
.personal_text h3 {
    font-size: 48px;
    text-transform: uppercase;
    margin-bottom: 15px;
    color: #222222;
}
.personal_text h4 {
    font-size: 16px;
    font-weight: 500;
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    margin-bottom: 20px;
    color: #222222;
}

.personal_text p {
    font-family: "Roboto", sans-serif;
    max-width: 540px;
    color: #777777;
    margin-bottom: 40px;
}
.home_banner_area .banner_inner .banner_content .media .media-body {
    vertical-align: middle;
    align-self: center;
}
.home_banner_area .banner_inner .banner_content {
    color: #222222;
    vertical-align: middle;
    align-self: center;
    text-align: left;
}
body {
    line-height: 26px;
    font-size: 16px;
    font-family: "Roboto", sans-serif;
    font-weight: normal;
    color: #777777;
}
.list {
    list-style: none;
    margin: 0px;
    padding: 0px;
}
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.personal_text .basic_info li {
    margin-bottom: 15px;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.personal_text .personal_social {
    margin-top: 45px;
}
.personal_text .basic_info li a {
    position: relative;
    padding-left: 40px;
    font-size: 16px;
    color: #777777;
}
.personal_text .basic_info li a i {
    position: absolute;
    left: 0px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
    color: #766dff;
}

.lnr {
    font-family: 'Linearicons-Free';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

</style>
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							Hello Car
							</h1>	
							
						</div>											
					</div>
				</div>
			</section>
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<section class="home_banner_area">
           	<div class="container box_1620">
           		<div class="banner_inner d-flex align-items-center">
					<div class="banner_content">
						<div class="media">
							<div class="d-flex">
								<img style="width:370px; height:300px;" src="<?php echo base_url();?>assets/image_path/anas.jpg" alt="">
							</div>
							<div class="media-body">
								<div class="personal_text">
									<h6>Hello, i am</h6>
									<h3>Pappu</h3>
									<h4>BSC honors in CSE</h4>
				
									<h4><a Style="color:black;" href="http://metrouni.edu.bd/">Metropolitan University, Sylhet</a></h4>
									</ul>
									<ul class="list basic_info">
										<li><a><i class="lnr lnr-phone-handset"></i> 01719 716107</a></li>
										<li><a ><i class="lnr lnr-envelope"></i> najiur.mu@gmail.com</a></li>
										<li><a><i class="lnr lnr-home"></i> Amberkhana, Sylhet</a></li>
									</ul>
									
							
								<button class="button button4"><a Style="color:black;" href="https://www.facebook.com/imNpappu">Add Me On FB<a/></button>
									
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
	
	
	
	
	
	

    
    <!-- /.content -->
  </div>
	<?php include("front/inc/new_footer.php");?>