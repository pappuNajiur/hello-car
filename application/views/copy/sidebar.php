 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
         
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>-->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVIGATION</li>
       <!-- <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>-->
        
        
        <li class="treeview">
          <?php if($this->tank_auth->get_user_type() == 'admin'){?>
          <a href="#">
            <h5><i class="fa fa-edit"></i> <span>Setup Area</span></h5>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
			
            
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Admin_controller/vehicle_setup"><i class="fa fa-circle-o"></i>Vehicle Setup</a></li>
            <li><a href="<?php echo base_url();?>Admin_controller/vehicle_brand_entry"><i class="fa fa-circle-o"></i>Brand Setup</a></li>
            
            <li><a href="<?php echo base_url();?>Admin_controller/viewcars"><i class="fa fa-circle-o"></i>View All Vehicles </a></li>
            <li><a href="<?php echo base_url();?>Admin_controller/viewcustomers"><i class="fa fa-circle-o"></i>View All Customers </a></li>
            <li><a href="<?php echo base_url();?>Admin_controller/viewdrivers"><i class="fa fa-circle-o"></i>View All Drivers </a></li>
            <li><a href="<?php echo base_url();?>Admin_controller/vieworders"><i class="fa fa-circle-o"></i>View All orders</a></li>
            <li><a href="<?php echo base_url();?>Admin_controller/aboutusinsert"><i class="fa fa-circle-o"></i>About Us</a></li>
            <li><a href="<?php echo base_url();?>Admin_controller/viewcartdrivers"><i class="fa fa-circle-o"></i>View Drivers </a></li>
          </ul>
        </li>
		 <li class="treeview">
          <a href="#">
            <h5><i class="fa fa-edit"></i> <span>Account Area</span></h5>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
			
            
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Admin_controller/view_unverified_payment"><i class="fa fa-circle-o"></i>View Unverified Payment</a></li>
			<li><a href="<?php echo base_url();?>Admin_controller/view_verified_payment"><i class="fa fa-circle-o"></i>View Verified Payment</a></li>
          </ul>
        </li>


		<?php } ?>
        <li class="treeview">
          <?php if($this->tank_auth->get_user_type() == 'driver' ){?>
          <a href="#">
           <h5> <i class="fa fa-edit"></i> <span>Setup Area</span></h5>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <?php } ?>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php echo base_url();?>Admin_controller/vehicle_brand_entry"><i class="fa fa-circle-o"></i>Brand Setup</a></li>
            <li><a href="<?php echo base_url();?>Admin_controller/vehicle_setup"><i class="fa fa-circle-o"></i>Vehicle Setup</a></li>
            <li><a href="<?php echo base_url();?>My_controller/viewdrivercars"><i class="fa fa-circle-o"></i>My vehicles</a></li>
            <li><a href="<?php echo base_url();?>Admin_controller/displaytrip"><i class="fa fa-circle-o"></i>My orders</a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <?php if($this->tank_auth->get_user_type() == 'customer' ){?>
          <a href="#">
           <h5> <i class="fa fa-edit"></i> <span>Rent Area</span></h5>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            <?php } ?>
          </a>
          <ul class="treeview-menu">
            
            
            <li><a href="<?php echo base_url();?>My_controller/ordercar"><i class="fa fa-circle-o"></i>Order a Car </a></li>
          
			<li><a href="<?php echo base_url();?>Admin_controller/displaytrip"><i class="fa fa-circle-o"></i>My orders</a></li>
            
          </ul>
		  
        </li>


      <!--  <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>View Area</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php //echo base_url();?>assets/pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
            <li><a href="<?php //echo base_url();?>Admin_controller/vieworders"><i class="fa fa-circle-o"></i>My Orders</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Order Car</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php //echo base_url();?>My_controller/ordercar"><i class="fa fa-circle-o"></i>Order a Car </a></li>
            <li><a href="<?php //echo base_url();?>assets/pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>-->
        
        
    </section>
    <!-- /.sidebar -->
  </aside>