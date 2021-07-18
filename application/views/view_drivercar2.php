
<?php $this->load->view('header')?>
<?php $this->load->view('sidebar')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view('content')?>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <CENTER><h3 style="color:red;">Driver Name: <span style="color:blue"><?php echo $this->tank_auth->get_username();?></span>!! <CENTER><h3 style="color:Green;">All Vehicles</h3></CENTER><br>
    
  <table class="table table-bordered">
    <thead>
      <tr style="border:1px solid green;">
            
           <td style="color:red; font-size:17px; border:1px solid green;">Vehicle Name</td>
            <td style="color:red; font-size:17px; border:1px solid green;">Vehicle Brand Id</td>
             <td style="color:red; font-size:17px; border:1px solid green;">Vehicle Details</td>
             <td style="color:red; font-size:17px; border:1px solid green;">Image</td>
             
      </tr>
    </thead>
    <tbody>
      
        <?php  
         foreach ($drivercar->result() as $row)  
         {  
            ?><tr>  
            
             
            <td style="color:blue; font-size:15px; border:1px solid green; "><?php echo $row->vehicle_name;?></td>  
            <td style="color:blue; font-size:15px; border:1px solid green; "><?php echo $row->brand_id;?></td> 
            <td style="color:blue; font-size:15px; border:1px solid green; "><?php echo $row->vehicle_details;?></td>
            <td style="color:blue; border:1px solid green;"><img class="img-thumbnail" src="<?php echo base_url();?><?php echo $row->image_path;?>" alt="" style= "width:70px; height:70px;"> </td>
        
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