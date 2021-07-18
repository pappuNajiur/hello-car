
<style>
.content-wrapper {
    padding: 40px 5px;
    text-align: center;
}


.page-header {
    text-align: center;
	color:Black;
	padding: 15px 0px;
}
</style>


  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">


		<div class="row">
				<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
					  <!-- Custom tabs (Charts with tabs)-->
					 <!--  <CENTER><h3 class="page-header" style="color:red;"><span style="color:black">Driver Name: <?php //echo $this->tank_auth->get_username();?></span></h3></CENTER><br>-->
					  <CENTER><h3 style="color:black;">Orders</h3></CENTER><br>
				<table style="padding: 0px 0px;"id="example1" class="table table-bordered table-striped">
					<thead>
					  <tr>
							 
						   <th style="color:black; font-size:15px;">NO</th>
						   <th style="color:black; font-size:15px;">Vehicle Name</th>
						   <th style="color:black; font-size:15px;">Rate</th>
							<th style="color:black; font-size:15px;">Start Date</th>
							<th style="color:black; font-size:15px;">End Date</th>
							<th style="color:black; font-size:15px;">Total</th>
							<th style="color:black; font-size:15px;">Paid Amount</th>
							<th style="color:black; font-size:15px;">Driver Name</th>
							<th style="color:black; font-size:15px;">Driver Mobile</th>
							<th style="color:black; font-size:15px;"></th>
							
								
					  </tr>
					</thead>
					<tbody>
					  
						<?php 
						$orderno = 0;
						
						 foreach ($order_info as $row)  
						 {  
						 $orderno++;
							?>
						<tr>  
							
							<td style="color:black; font-size:15px;"><?php echo $orderno; ?></td>
							<td style="color:black; font-size:15px;"><?php echo $row->vehicle_name;?></td>
							<input  type="hidden"<?php echo $row->booking_id;?>>
							<td style="color:black; font-size:15px;"><?php echo $row->vehicle_rate;?></td> 
							<td style="color:black; font-size:15px;"><?php echo $row->start_date;?></td> 
							<td style="color:black; font-size:15px;"><?php echo $row->end_date;?></td>
							
							<?php
								$date1 = date_create($row->start_date);
								$date2 = date_create($row->end_date);
								$diff = date_diff($date1,$date2);
							?>
							
							<td style="color:black; font-size:15px;"><?php echo ($diff->d+1)*$row->vehicle_rate;?></td>
							<td style="color:black; font-size:15px;"><?php echo $this->Admin_model->get_total_verified_payemnt($row->booking_id);?></td>
							<td style="color:black; font-size:15px;"><?php echo $row->service_provider_name;?></td>
							<td style="color:black; font-size:15px;"><?php echo $row->phone;?></td>
							<td style="color:Green;" ><button><a href="<?php echo base_url();?>Admin_controller/feedback/<?php echo $row->booking_id;?>">FeedBack</a></Button></td>
							
							
						</tr>  
						<?php }  
						 ?>  
					 
					  
					</tbody>
				</table>
				</section>
		</div>
        
	</div>
         
  