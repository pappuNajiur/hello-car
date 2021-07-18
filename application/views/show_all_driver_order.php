
<?php $this->load->view('new_header')?>
<style>
.content-wrapper {
    padding: 80px 5px;
    text-align: center;
}


.page-header {
    text-align: center;
	color:Black;
	padding: 15px 0px;
}
</style>
<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							All Order
							</h1>	
							
						</div>											
					</div>
				</div>
</section>

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">


		<div class="row">
				<!-- Left col -->
			<section class="col-lg-12 connectedSortable">
					  <!-- Custom tabs (Charts with tabs)-->
					 <!--  <CENTER><h3 class="page-header" style="color:red;"><span style="color:black">Driver Name: <?php //echo $this->tank_auth->get_username();?></span></h3></CENTER><br>-->
					
				<?php if($this->tank_auth->get_user_type() == 'driver'){?>
				<CENTER><h3><?php echo $this->tank_auth->get_username();?>'s Orders</h3></CENTER><br>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
					  <tr>
							 
						   <th style="color:black; font-size:15px;">NO</th>
						   <th style="color:black; font-size:15px;">Vehicle Name</th>
						   
						   <th style="color:black; font-size:15px;">Rate</th>
							<th style="color:black; font-size:15px;">Start Date</th>
							<th style="color:black; font-size:15px;">End Date</th>
							<th style="color:black; font-size:15px;">Total</th>
							<th style="color:black; font-size:15px;">Paid Amount</th>
							<th style="color:black; font-size:15px;">Customer Name</th>
							<th style="color:black; font-size:15px;">Customer Mobile</th>
							
								
					  </tr>
					</thead>
					<tbody>
					  
						<?php 
						$orderno = 0;
						
						 foreach ($h->result() as $row)  
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
							<td style="color:black; font-size:15px;"><?php echo $row->firstname;?></td>
							<td style="color:black; font-size:15px;"><?php echo $row->mobile;?></td>
							
							
						</tr>  
						<?php }  
						 ?>  
					 
					  
					</tbody>
				</table>
			<?php }  
						 ?> 
				
				<?php if($this->tank_auth->get_user_type() == 'customer'){?>
				<CENTER><h3><?php echo $this->tank_auth->get_username();?>'s Orders</h3></CENTER><br>
				<table id="example1" class="table table-bordered table-striped">
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
							
								
					  </tr>
					</thead>
					<tbody>
					  
						<?php 
						$orderno = 0;
						
						 foreach ($h->result() as $row)  
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
							
							
						</tr>  
						<?php }  
						 ?>  
					 
					  
					</tbody>
				</table>
				<?php }  
						 ?> 
			</section>
		</div>
        
	</div>
         
  <?php $this->load->view('new_footer')?>