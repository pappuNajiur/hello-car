
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
							<h1 class="text-white">
							All Vehicles
							</h1>	
							
						</div>											
					</div>
				</div>
			</section>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <script src="<?php echo base_url();?>lib/jquery.dataTables.js" type="text/javascript"></script> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>lib/jquery.dataTables.css"/>
      <!-- /.row -->
      <!-- Main row -->
    <div class="row">
        <!-- Left col -->
      <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
        

        <div class="box">
          <div class="box-header">
            <CENTER><h3 style="color:black;">All Drivers Info</h3></CENTER><br>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th style="color:white;background:#222D32; font-size:15px;">Firstname</th>
                <th style="color:white;background:#222D32;  font-size:15px;">Lastname</th>
                <th style="color:white;background:#222D32;  font-size:15px;">Email</th>
                <th style="color:white;background:#222D32; font-size:15px;">Address</th>
                <th style="color:white;background:#222D32;  font-size:15px;">Mobile</th>
                <th style="color:white;background:#222D32;  font-size:15px;">Action</th>
              </tr>
              </thead>
              <tbody>
              <?php  
           foreach ($h->result() as $row)  
           {  
            ?><tr>  
            
            <td style="font-size:15px;"><?php echo $row->firstname;?></td>  
            <td style="font-size:15px;"><?php echo $row->lastname;?></td>  
            <td style="font-size:15px;"><?php echo $row->email;?></td> 
            <td style="font-size:15px;"><?php echo $row->address;?></td>
            <td style="font-size:15px;"><?php echo $row->mobile?></td>
            <td style="font-size:15px;">  
            <a onclick="return confirm('Are you sure to Edit ?');" href="<?php echo base_url();?>Admin_controller/edit_driver/<?php echo $row->id;?>"><i class="fa fa-pencil"style="font-size:18px;color:blue"></i></a> ||
            
            <a onclick="return confirm('Are you sure to remove ?');" href=""><i  class="fa fa-trash-o" style="font-size:18px;color:red"></i></a> 
            </td> 
            <!--<td style="color:blue; font-size:15px; border:1px solid green; "><?php //echo $row->user_id?></td>-->
            
            <!-- <td style="color:blue; font-size:15px; border:1px solid green; "> <a href="<?php //echo base_url();?>Admin_controller/edit_data/<?php //echo $row->vehicle_id;?>">Edit</a></td>-->   
            </tr>  
           <?php }  
           ?>  
              
              
              </table>
            <script>
              $(document).ready(function(){
                //$("#example1").DataTable();
              });
            </script>
            
          </div>
          
        </div>
        
      </section>
      
        </div>
    
  </div>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css" type="text/css">
<script src="<?php echo base_url();?>lib/jquery-1.11.1.min.js"></script>
<!--<script src="<?php echo base_url();?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>-->
<script src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>


<script>
var table = $('#example2').DataTable();
 
$('#example2 tbody').on( 'click', 'td', function () {
    alert( table.cell( this ).data() );
} );
</script>
  
  <?php $this->load->view('new_footer')?>