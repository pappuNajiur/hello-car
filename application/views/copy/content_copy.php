   <!-- Main content -->
    <section class="content">
<div class="row">
  
        
          <?php if($this->tank_auth->get_user_type() == 'admin' ){?>



            <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php 
                  $vehicle = $this->Admin_model->viewcustomer();
                  echo $vehicle->num_rows();?></h3>

              <p>View Vehicle</p>
            </div>
            <div class="icon">
              <!--<i class="icon ion-ios-car"></i> -->  <i class="fa fa-car"></i>
            </div>
            <a href="<?php echo base_url();?>Admin_controller/viewcars" class="small-box-footer">Click Here To Vehicle Cars<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php 
                  $customer = $this->Admin_model->viewcustomer();
                  echo $customer->num_rows();?></h3>

              <p>View Customers</p>
            </div>
            <div class="icon">
              <i class="icon icon ion-ios-eye"></i>
            </div>
            <a href="<?php echo base_url();?>Admin_controller/viewcustomers" class="small-box-footer">Click To See All Customer<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php 
                  $driver = $this->Admin_model->viewdriver();
                  echo $driver->num_rows();?></h3>

              <p>View Drivers</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo base_url();?>Admin_controller/viewdrivers" class="small-box-footer">Click To See All Drivers<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            
            <div class="inner">
              
                <h3><?php 
                  $order = $this->Admin_model->vieworderinfo();
                  echo $order->num_rows();?></h3>
              <p>View Orders</p>
            </div>
          
            <div class="icon">
              <i class="ion ion-eye"></i>
            </div>
            <a href="<?php echo base_url();?>Admin_controller/vieworders" class="small-box-footer">Click To See All Orders<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col  -->
       

          <?php }
          elseif($this->tank_auth->get_user_type() == 'driver' ){?>

            
           
          
          
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h2><!--<?php 
                    $order = $this->Admin_model->getname();
                    echo $order->num_rows();?>--> Brand Setup</h2>

                <!--<p>Brand Setup</p>-->
              </div>
              <div class="icon">
                <i class="icon ion-settings"></i>
              </div>
              <a href="<?php echo base_url();?>Admin_controller/vehicle_brand_entry" class="small-box-footer">Click Here To  Setup Brand <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div> 


          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                  <h2><!--<?php 
                      $order = $this->Admin_model->viewcarinfo();
                      echo $order->num_rows();?> -->Vehicle Setup</h2>

                 <!-- <p>Vehicle Setup</p>-->
                </div>
                <div class="icon">
                  <i class="icon ion-settings"></i>
                </div>
                <a href="<?php echo base_url();?>Admin_controller/vehicle_setup" class="small-box-footer">Click Here To  Setup Vehicle <i class="fa fa-arrow-circle-right"></i></a>
            </div>
           </div>


          


           <div class="col-lg-3 col-xs-6">
          <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h2>
                  <?php 
                    $order = $this->Admin_model->viewcarinfo();
                    echo $order->num_rows();
                    ?> Cars</h2>

               <p></p>
              </div>
              <div class="icon">
                <i class="fa fa-car"></i>
              </div>
              <a href="<?php echo base_url();?>My_controller/ordercar" class="small-box-footer">Click Here To  Order a Car <i class="fa fa-arrow-circle-right"></i></a>
            </div>
           </div>
       
        


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h2><!--<?php 
                    $order = $this->Admin_model->viewallorders();
                    echo $order->num_rows();?>-->My Orders</h2>

              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url();?>Admin_controller/displaytrip" class="small-box-footer">Click To See Your Orders <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        
       
        
          
        
    <?php }
    else{ ?>
     <!-- <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php 
                  $order = $this->Admin_model->viewcarinfo();
                  echo $order->num_rows();?> Cars</h3>

              <p>Order a Car</p>
            </div>
            <div class="icon">
              <i class="fa fa-car"></i>
            </div>
            <a href="<?php echo base_url();?>My_controller/ordercar" class="small-box-footer">Click Here To  Order a Car <i class="fa fa-arrow-circle-right"></i></a>
          </div>
           </div>
       
        


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> Orders</h3>

              <p>My orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url();?>Admin_controller/displayallorder" class="small-box-footer">Click To See Your Order <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

            

              <p>For Customer</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url();?>Admin_controller/displayallorder" class="small-box-footer">Click To See Your Order <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
       
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Log Out</h3>

              <p>Click Below</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?php echo base_url();?>auth/logout" class="small-box-footer">Click Here To Log Out <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>-->
        <?php } ?>



</div>