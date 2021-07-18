
<?php $this->load->view('new_header')?>
<style>
.about-content {
    padding: 80px 0px;
    text-align: center;
}


.content-wrapper {
    text-align: center;
	color:Black;
	padding: 80px 0px;
}
form {
						
					  background: #fff;
					  padding: 4em 4em 2em;
					  max-width: 400px;
					  margin: 0px auto 0;
					  box-shadow: 0 0 1em #222;
					  border-radius: 2px;
					}

	.payment:hover{text-decoration: underline;}
	table td{padding: 2px;}
	input{padding: 2px;}
	form{max-width: 570px;}
	
	.star-rating {
	  line-height:32px;
	  font-size:1.25em;
	}

	.star-rating .fa-star{color: yellow;}
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <CENTER><h3 style="color:black;">Enter your License Information</h3>
	
		  </CENTER><br>
		  <?php if($status == 'success'){?>
			<center><h3 style="color:green;">Data Successfully  Save.</h3></center>
		  <?php } ?>
		 <?php if($status == 'exist'){ ?>
		 <Center><h3 style="color:green;">Data Exist</h3></center>
		 <?php } ?>
		  
    <form method="post" action="">
	<table class="table table-bordered">
			
			<tr>
				<td style="width:170px;line-height:38px;color:Black;">License NO</td>
				<td><input class="form-control" type="text" required="required" name="license_no" placeholder="License NO"></td>
			</tr>
			<tr>
				<td style="width:170px;line-height:38px;color:Black;">Issue Date</td>
				 <td><input class="form-control" type="date"" required="required" name="issue" placeholder="License NO"></td>
			</tr>
		
			<tr>
				 <td style="width:170px;line-height:38px;color:Black;">Valid Till</td>
				 
				 <td><input class="form-control" type="date" required="required" name="valid" placeholder="Valid Till"></td>
				
			</tr>
				</tr>
			<tr>
				 <td style="width:170px;line-height:38px;color:Black;">Birth Date</td>
				 
				 <td><input class="form-control" type="date" required="required" name="dob" placeholder="Date Of Birth"></td>
				
			</tr>
			
			<tr><td colspan="2" style="text-align: center;"><input type="submit" class="btn btn-lg btn-info col-lg-4" name="submit" value="Add Info"></td></tr>
			
		</table>
		
	</form>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
 
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
    
          <!-- /.box -->

          <!-- quick email widget -->
          

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  
  <script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
     <script>
		var $star_rating = $('.star-rating .fa');

			var SetRatingStar = function() {
			  return $star_rating.each(function() {
				if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
				  return $(this).removeClass('fa-star-o').addClass('fa-star');
				} else {
				  return $(this).removeClass('fa-star').addClass('fa-star-o');
				}
			  });
			};

			$star_rating.on('click', function() {
			  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
			  return SetRatingStar();
			});

			SetRatingStar();
			$(document).ready(function() {

			});
	 </script>
  <?php $this->load->view('new_footer')?>