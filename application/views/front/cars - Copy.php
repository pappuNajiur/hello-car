<?php include("inc/header.php");?>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    font-size:15px; 
}

.button1 {font-size: 10px;}
.button2 {font-size: 12px;}
.button3 {font-size: 16px;}
.button4 {font-size: 20px;}
.button5 {font-size: 24px;}
</style>
	
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - April 07, 2014!</div>
				<div class="container_12">
					<div class="grid_12">
						<h3>Economy</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><a href="<?php echo base_url();?>" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img1.jpg" alt=""></a>
							<a href="" class="button">Book Now</a>
						</div>
						<div class="grid_4"><a href="<?php echo base_url();?>assets/frontcss/images/big2.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img2.jpg" alt=""></a>
						<a href="" class="button">Book Now</a>
						</div>
						<div class="grid_4"><a href="<?php echo base_url();?>assets/frontcss/images/big3.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img3.jpg" alt=""></a>
						 <a href="" class="button">Book Now</a>
						</div>
					</div>
					<div class="grid_12">
						<h3>Standard</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><a href="<?php echo base_url();?>" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img4.jpg" alt=""></a>
							<a href="" class="button">Book Now</a>
						</div>
						<div class="grid_4"><a href="<?php echo base_url();?>assets/frontcss/images/big5.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img5.jpg" alt=""></a>
						<a href="" class="button">Book Now</a>
						</div>
						<div class="grid_4"><a href="<?php echo base_url();?>assets/frontcss//big6.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img6.jpg" alt=""></a>
						<a href="" class="button">Book Now</a>
						</div>
					</div>
					<div class="grid_12">
						<h3>Lux</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><a href="images/big7.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img7.jpg" alt=""></a>
						<a href="<?php echo base_url();?>auth/login" class="button">Book Now</a>
						</div>
						<div class="grid_4"><a href="images/big8.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img8.jpg" alt=""></a>
						<a href="" class="button">Book Now</a>
						</div>

						<div class="grid_4"><a href="images/big9.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img9.jpg" alt=""></a>
						<a href="" class="button">Book Now</a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<?php include("inc/footer.php");?>
	</body>
</html>


<div class="ic">More Website Templates @ TemplateMonster.com - April 07, 2014!</div>
				<?php  
					 foreach ($viewcars->result() as $row)  
					  {  
						?>
				
				<div class="container_12">
					<div class="grid_12">
						<h3>Economy</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><img class="img-thumbnail" src="<?php echo base_url();?><?php echo $row->image_path;?>" alt="Porduct Image Info" style= "width:70px; height:70px;">
							<a href="<?php echo base_url();?>auth/login?rdr<?php echo $row->vehicle_id;?>" class="button">Book Now</a>
						</div>
						<div class="grid_4"><a href="<?php echo base_url();?>assets/frontcss/images/big2.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img2.jpg" alt=""></a>
						<a href="" class="button">Book Now</a>
						</div>
						<div class="grid_4"><a href="<?php echo base_url();?>assets/frontcss/images/big3.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img3.jpg" alt=""></a>
						 <a href="" class="button">Book Now</a>
						</div>
					</div>
					<div class="grid_12">
						<h3>Standard</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><a href="<?php echo base_url();?>" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img4.jpg" alt=""></a>
							<a href="" class="button">Book Now</a>
						</div>
						<div class="grid_4"><h3><?php echo $row->vehicle_name;?></h3>
						</div>
						<div class="grid_4"><a href="<?php echo base_url();?>assets/frontcss//big6.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img6.jpg" alt=""></a>
						<a href="" class="button">Book Now</a>
						</div>
					</div>
					<div class="grid_12">
						<h3>Lux</h3>
					</div>
					<div class="clear"></div>
					<div class="gallery">
						<div class="grid_4"><a href="images/big7.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img7.jpg" alt=""></a>
						<a href="<?php echo base_url();?>auth/login" class="button">Book Now</a>
						</div>
						<div class="grid_4"><a href="images/big8.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img8.jpg" alt=""></a>
						<a href="" class="button">Book Now</a>
						</div>

						<div class="grid_4"><a href="images/big9.jpg" class="gal"><img src="<?php echo base_url();?>assets/frontcss/images/page3_img9.jpg" alt=""></a>
						<a href="" class="button">Book Now</a>
						</div>
					</div>
					<div class="clear"></div>
					
					
					<?php }  
					       ?>
					
					
					
					
					
					
					 <div class="row">
        <?php  
         foreach ($viewcars->result() as $row)  
         {  
            ?>
        <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              <div class="widget-user-image">
                <img class="img-thumbnail" src="<?php echo base_url();?><?php echo $row->image_path;?>" alt="Porduct Image Info" style= "width:70px; height:70px;">
              </div>
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username">  <?php echo $row->vehicle_name;?></h3>
              <h5 class="widget-user-desc">Vehicle ID:<?php echo $row->vehicle_id;?></h5>
              <h5 class="widget-user-desc">Vehicle Condition: <?php echo $row->vehicle_details;?></h5>
              
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
               <!-- <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>-->
                <li><a class="nedd_car" data-value="<?php echo $row->vehicle_id;?>" href="<?php echo base_url();?>Admin_controller/putorder/<?php echo $row->vehicle_id;?>">Need A Ride ? <span class="pull-right badge bg-aqua">Book Now</span></a></li>
                
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
        <!-- /.col -->
  
        <?php }  
         ?>

         
        <!-- /.col -->
      
        <!-- /.col -->
      </div>