
<?php $this->load->view('new_header');?>
<style>
.about-content {
    padding: 80px 0px;
    text-align: center;
}


.content-wrapper {
    text-align: center;
	color:Black;
	padding: 20px 0px;
}
</style>
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h3 class="text-white">
							Car Rental
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
          <CENTER><h3 style="color:black;">Your Active Orders</h3></CENTER><br>
    
 <table id="example2" class="table table-bordered table-striped">
    <thead>
      <tr>
             
           <th style="color:black; font-size:15px;">NO</th>
           <th style="color:black; font-size:15px;">Booking Id</th>
           <th style="color:black; font-size:15px;">Vehicle Name</th>
           <th style="color:black; font-size:15px;">Rate</th>
            <th style="color:black; font-size:15px;">Start Date</th>
             <th style="color:black; font-size:15px;">End Date</th>
             <th style="color:black; font-size:15px;">Total</th>
              <th style="color:black; font-size:15px;">Username</th>
              <th style="color:black; font-size:15px;">Action</th>                
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
           <td style="color:black; font-size:15px;"><?php echo $row->booking_id;?></td>
            <td style="color:black; font-size:15px;"><?php echo $row->vehicle_name;?></td>  
            <td style="color:black; font-size:15px;"><?php echo $row->vehicle_rate;?></td>  
            <td style="color:black; font-size:15px;"><?php echo $row->start_date;?></td> 
            <td style="color:black; font-size:15px;"><?php echo $row->end_date;?></td>
			<?php
				$date1 = date_create($row->start_date);
				$date2 = date_create($row->end_date);
				$diff = date_diff($date1,$date2);
			?>
			
            <td style="color:black; font-size:15px;"><?php echo ($diff->d+1)*$row->vehicle_rate;?></td>
           
            <td style="color:black; font-size:15px;"><?php echo $row->username;?></td>
           <td>  
          <a onclick="return confirm('Are you sure to edit ?');" target="_blank" href="<?php echo base_url();?>Admin_controller/edit_order/<?php echo $row->booking_id;?>"><i class="fa fa-pencil"style="font-size:18px;color:blue"></i></a> ||
            
            <a onclick="return confirm('Are you sure to remove ?');" href="<?php echo base_url();?>Admin_controller/delete_order/<?php echo $row->booking_id;?>"><i class="fa fa-trash-o" style="font-size:18px;color:red"></i></a> 
			</td>    
           
            
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


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css" type="text/css">
<script src="<?php echo base_url();?>lib/jquery-1.11.1.min.js"></script>
<!--<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>-->
<script src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>


<script>
var table = $('#example2').DataTable();
 
$('#example2 tbody').on( 'click', 'td', function () {
    //alert( table.cell( this ).data() );
} );
</script>

  <?php $this->load->view('new_footer')?>