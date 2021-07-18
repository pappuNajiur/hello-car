
<?php $this->load->view('new_header');

$row = $h->row();

//print_r($row);
				$date1 = date_create($row->start_date);
				$date2 = date_create($row->end_date);
				$diff = date_diff($date1,$date2);

?>
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
<style>
	.payment:hover{text-decoration: underline;}
	table td{padding: 2px;}
	input{padding: 2px;}
	form{max-width: 570px;}
	
	
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <CENTER><h3 style="color:black;"><span style="color:blue">Please pay through Bkash using information below.</h3>
			<h4>Bkash Number: 01719716107</h4>
		  </CENTER><br>
		  
		  <?php
			if($status == 1){
				echo '<center><h4 style="color: green;">Your information have been successfully submitted.Please wait for further confirmation from our side.</h4></center><br>';
			}
			else if($status == 2){
				echo '<center><h4 style="color: green;">Transaction ID Already Exist. Please Try Again.</h4></center><br>';
			}
		  ?>
		  
    <form method="post" action="">
		<table class="table table-bordered">
			<tr>
				 <td style="width: 170px;line-height:38px;">Transaction ID</td>
				 <td><input class="form-control" type="text" required="required" name="trans_id" placeholder="Transaction ID"></td>
			</tr>
			<tr>
				 <td style="width: 170px;line-height:38px;">Mobile Number</td>
				 <td><input class="form-control" type="text" required="required" name="mobile_number" maxlength="11" onkeypress=" return isNumber(event)" placeholder="Mobile Number"></td>
			</tr>
			<tr>
				 <td style="width: 170px;line-height:38px;">Paid Amount</td>
				 <td><input class="form-control" type="text"name="paid_amount" value="<?php echo ($diff->d+1)*$row->vehicle_rate;?>" readonly class="form-control span12">
				 <input type="hidden" name="booking_id" value="<?php echo $order_id;?>">
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
  <script>
function isNumber(evt)
		 {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true; }
	</script>
  <?php $this->load->view('new_footer')?>