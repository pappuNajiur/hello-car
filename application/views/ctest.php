<?php $this->load->view('new_header');?>
<style>
form {
						
					  background: #fff;
					  padding: 4em 4em 2em;
					  max-width: 400px;
					  margin: 0px auto 0;
					  box-shadow: 0 0 1em #222;
					  border-radius: 2px;
					}
					
.content{
	padding: 5px 0px;
}					
</style>

			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h3 class="text-white">
							Test
							</h3>	
							
						</div>											
					</div>
				</div>
			</section>
			
			<div class="content">
				<div>
					<section class="col-lg-12">
					
						<form action="<?php echo base_url();?>Admin_controller/view_test" method="post">
						<h2 style="color:Red;">Enter Test Data</h2>
						<p>Name:
						<input name="name" type="text" required="required">
						</p>
						<p>Dept.:
						<input name="dep" type="text" required="required">
						</p>
						<p>Batch:
						<input name="batch" type="text" required="required">
						</p>
						
						<p>ID:
						<input name="sid" type="number" required="required">
						</p>
						<p>
						<input type="submit" value="Save">
						</p>
						
						</form>
					
					</section>
					
				</div>
				
			</div>
			
<?php $this->load->view('new_footer');?>			