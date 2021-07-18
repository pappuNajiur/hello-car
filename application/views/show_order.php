
<?php $this->load->view('new_header');?>
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
</style>
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							Your Order
							</h1>	
							
						</div>											
					</div>
				</div>
			</section>
<style>
	.payment:hover{text-decoration: underline;}
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
          <CENTER><h3 style="color:black;"><span style="color:blue"><?php echo $this->tank_auth->get_username();?></span>!! You have temporary booked the car <a class="payment" href="<?php echo base_url();?>Admin_controller/order_payment/<?php echo $order_id;?>">Pay Here</a> within 30 minutes to confirm.</h3></CENTER><br>
          <CENTER><h3 style="color:Green;">Your Active Orders</h3></CENTER><br>
    
  <table class="table table-bordered">
    <thead>
      <tr>
             
           <th style="color:white;background:#222D32; font-size:15px;">Vehicle Name</th>
           <th style="color:white;background:#222D32; font-size:15px;">Rate</th>
            <th style="color:white;background:#222D32; font-size:15px;">Start Date</th>
             <th style="color:white;background:#222D32; font-size:15px;">End Date</th>
             <th style="color:white;background:#222D32; font-size:15px;">Total</th>
            
                
      </tr>
    </thead>
    <tbody>
      
        <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            
           
            <td style="color:black; font-size:15px; border:1px solid black;"><?php echo $row->vehicle_name;?></td>
            <td style="color:black; font-size:15px; border:1px solid black;"><?php echo $row->vehicle_rate;?></td>
            <td style="color:black; font-size:15px; border:1px solid black;"><?php echo $row->start_date;?></td> 
            <td style="color:black; font-size:15px; border:1px solid black;"><?php echo $row->end_date;?></td>
			
			<?php
				$date1 = date_create($row->start_date);
				$date2 = date_create($row->end_date);
				$diff = date_diff($date1,$date2);
			?>
			
            <td style="color:black; font-size:15px; border:1px solid black;"><?php echo ($diff->d+1)*$row->vehicle_rate;?></td>
            
            
            </tr>  
         <?php }  
         ?>  
     
      
    </tbody>
  </table>
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
  <?php $this->load->view('new_footer')?>