
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
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <CENTER><h3 style="color:black;">Submit your feedback</h3>
	
		  </CENTER><br>
		  <?php if($status == 'success'){?>
			<center><h3 style="color:green;">Feedback Successfully  Submitted.</h3></center>
		  <?php } ?>
		 <?php if($status == 'exist'){ ?>
		 <Center><h3 style="color:green;">FeedBack Exist</h3></center>
		 <?php } ?>
		  
    <form method="post" action="">
	<table class="table table-bordered">
			
			<tr>
				<td style="width:170px;line-height:38px;color:Black;">Vehicle Name</td>
				 <td style="width: 170px;line-height:38px;"><?php echo $order_info->vehicle_name;?></td>
			</tr>
			<tr>
				<td style="width:170px;line-height:38px;">Driver Name</td>
				 <td><?php echo $order_info->service_provider_name;?></td>
			</tr>
			<tr>
				 <td style="width:170px;line-height:38px;">Feedback</td>
				 <td><input class="form-control" type="text" required="required" name="feedback" placeholder="Feedback"></td>
				 <input type="hidden" name="order_id" value="<?php echo $order_info->booking_id;?>">
				 <input type="hidden" name="vehicle_id" value="<?php echo $order_info->vehicle_id;?>">
			</tr>
			<tr>
				 <td style="width: 170px;line-height:38px;">Rating</td>
				 <td>
							<div class="container">
							  <div class="row">
								<div class="col-lg-12">
								  <div class="star-rating">
									<span class="fa fa-star-o" data-rating="1"></span>
									<span class="fa fa-star-o" data-rating="2"></span>
									<span class="fa fa-star-o" data-rating="3"></span>
									<span class="fa fa-star-o" data-rating="4"></span>
									<span class="fa fa-star-o" data-rating="5"></span>
									<!--<input type="hidden" name="whatever1" class="rating-value" value="2.56">-->
									<input type="hidden" name="rating" class="rating-value" value="0">
								  </div>
								</div>
							  </div>
							</div>
				 </td>
			</tr>
			
			<tr><td colspan="2" style="text-align: center;"><input type="submit" class="btn btn-lg btn-info col-lg-4" name="submit" value="Submit"></td></tr>
			
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