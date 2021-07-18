<?php $this->load->view('new_header');?>
<style>
.about-content {
    padding: 80px 0px;
    text-align: center;
}


.content-wrapper {
    text-align: center;
	color:Black;
	padding: 40px 0px;
}
</style>
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							All Verified Transaction
							</h1>	
							
						</div>											
					</div>
				</div>
			</section>
  <div class="content-wrapper">
  
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <CENTER><h3 style="color:black; margin: 0px;">All Verified Transaction</h3></CENTER><br>
    
 <table id="example2" class="table table-bordered table-striped">
    <thead>
      <tr>
             
           <th style="color:black; font-size:15px;">NO</th>
           <th style="color:black; font-size:15px;">Booking Id</th>
           <th style="color:black; font-size:15px;">Customer Name</th>
           <th style="color:black; font-size:15px;">Total Amount</th>
           <th style="color:black; font-size:15px;">Paid Amount</th>
            <th style="color:black; font-size:15px;">Trnsaction ID</th>
             <th style="color:black; font-size:15px;">Mobile Number</th>
             <th style="color:black; font-size:15px;">Transaction Date</th>
              <th style="color:black; font-size:15px;"><a href="#">Status</a></th>
      </tr>
	  
    </thead>
    <tbody>
      
        <?php
			$orderno = 0;$total_right = 0;$total_wrong = 0;
         foreach ($h->result() as $row)
					 
         {  
           $orderno++;
				$date1 = date_create($row->start_date);
				$date2 = date_create($row->end_date);
				$diff = date_diff($date1,$date2);
		   
		   ?>
			<tr>  
           <td style="color:black; font-size:15px;"><?php echo $orderno; ?></td>
           <td style="color:black; font-size:15px;"><?php echo $row->booking_id;?></td>
            <td style="color:black; font-size:15px;"><?php echo $row->firstname.' '.$row->lastname;?></td>  
            <td style="color:black; font-size:15px;"><?php echo ($diff->d+1)*$row->curr_rate;?></td>  
            <td style="color:black; font-size:15px;"><?php echo $row->paid_amount;?></td> 
            <td style="color:black; font-size:15px;"><?php echo $row->transaction_number;?></td>
            <td style="color:black; font-size:15px;"><?php echo $row->mobile_number;?></td>
            <td style="color:black; font-size:15px;"><?php echo date('d-m-Y H:i:s',strtotime($row->transaction_date));?></td>
           <td>  
				<?php if($row->transaction_status == 1){echo '<div style="color: green;">Verified</div>';
					$total_right += $row->paid_amount;
				}
				else{ echo '<div style="color: red;">Wrong Info</div>';
					$total_wrong += $row->paid_amount;
				}
				?>
		   </td>    
           
            
            </tr>  
         <?php }  
         ?>  
			<tr> <th colspan="4"> <?php echo 'Total Right Transaction Amount: '.$total_right;?></th>
			<th colspan="5" style="text-align:right;"> <?php echo 'Total Wrong Transaction Amount: '.$total_wrong;?></th></tr>
      
    </tbody>
  </table>
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css" type="text/css">
<script src="<?php echo base_url();?>lib/jquery-1.11.1.min.js"></script>
<!--<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>-->
<script src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>


<script>
/* var table = $('#example2').DataTable();
 
$('#example2 tbody').on( 'click', 'td', function () {
    //alert( table.cell( this ).data() );
} ); */
$('.verify').click(function(){
	var trans_id = $(this).attr('data-value');
	
	$.ajax({
		url: '<?php echo base_url();?>admin_controller/verify_payament',
		data: {'trans_id' : trans_id,'status' : 1},
		dataType: 'json',
		method: 'post',
		success: function(result){
				if(result == 1){
					window.location = "<?php echo base_url().'admin_controller/view_unverified_payment';?>";
				}
		}
	});
});
$('.wrong_info').click(function(){
	var trans_id = $(this).attr('data-value');
	
	$.ajax({
		url: '<?php echo base_url();?>admin_controller/verify_payament',
		data: {'trans_id' : trans_id,'status' : 2},
		dataType: 'json',
		method: 'post',
		success: function(result){
				if(result == 1){
					window.location = "<?php echo base_url().'admin_controller/view_unverified_payment';?>";
				}
		}
	});
});
 
</script>

  <?php $this->load->view('new_footer')?>