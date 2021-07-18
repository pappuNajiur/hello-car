
<?php $this->load->view('header')?>
<?php $this->load->view('sidebar')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<?php $this->load->view('content')?>
 
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <CENTER><h3 style="color:black;"><span style="color:black">Customer Name: <?php echo $this->tank_auth->get_username();?></span></h3></CENTER><br>
          <CENTER><h3 style="color:black;">Your Active Orders</h3></CENTER><br>
    
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
             
           <th style="color:black; font-size:15px;">Vehicle Name</th>
            <th style="color:black; font-size:15px;">Start Date</th>
             <th style="color:black; font-size:15px;">End Date</th>
             <th style="color:black; font-size:15px;">Order Status</th>
            
                
      </tr>
    </thead>
    <tbody>
      
        <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            
           
            <td style="color:black; font-size:15px;"><?php echo $row->vehicle_name;?></td>
           <td style="color:black; font-size:15px;"><?php echo $row->start_date;?></td> 
            <td style="color:black; font-size:15px;"><?php echo $row->end_date;?></td>
            <td style="color:black; font-size:15px;"><?php echo $row->vehicle_status;?></td>
            
            
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
  <?php $this->load->view('footer')?>