<?php $this->load->view('new_header');?>
<style>
.about-content {
    padding: 80px 0px;
    text-align: center;
}


.page-header {
    text-align: center;
	color:Black;
	padding: 15px 0px;
}
.car_img{
	border: 5px solid black;
	margin-left: 35px;
}
.card{border:none; text-align: center;}
label {
    //display: inline-block;
    margin-bottom:0px;
}
form {
  background: #fff;
  padding: 4em 4em 2em;
  max-width: 400px;
  margin: 0px auto 0;
  box-shadow: 0 0 1em #222;
  border-radius: 2px;
}

button {
				  border: none;
				  outline: 0;
				  display: inline-block;
				  padding: 8px;
				  color: white;
				  background-color: #000;
				  text-align: center;
				  cursor: pointer;
				  width: 60%;
				  font-size: 18px;
				}
</style>
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
							.
							
						</div>											
					</div>
				</div>
			</section>
		<?php if($this->tank_auth->get_user_type() == 'customer'){?>
<div class="container">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
    <section class="col-lg-12 col-md-12 connectedSortable">
    
    <?php 
    if($exist){
        //print_r($book_info);
        echo '<h3>This car is already booked from '.'<br>'.$book_info->start_date.' to '.$book_info->end_date.'.</h3><br>';
        echo '<h4> Please Select Different Dates</h4>'; 
     }?>
     
		<div class="row" style="margin-top: 50px;">
			
			<?php if(isset($vehicle_infos))
			  {
			foreach ($vehicle_infos->result() as $row) 
			{
					
				?>
				
				<div class="col-md-6">
					<div class="card">
					
					<?php if(getimagesize(base_url().$row->car_path)){?>
					  <img class="car_img" src="<?php echo base_url();?><?php echo $row->car_path;?>" alt="img" style="width:80%;;">
					<?php } else{?>
					  
					  <img src="<?php echo base_url();?>assets/image_path/demo.png" alt="img" style="width:80%;;">
					<?php } ?>
					  <h1 style="color: black;"><?php echo $row->vehicle_name;?></h1>
					  <p style="margin-bottom: 0.20rem;" class="title"><h4>Driver: <?php echo $row->firstname.' '.$row->lastname;?></h4></p>
					  <p style="color: black;margin-bottom: 0.20rem;">Cell: <?php echo $row->mobile;?></p>
					  <p style="color: black;margin-bottom: 0.20rem;">Brand: <?php echo $row->brand_name;?></p>
					  <p style="color: black;margin-bottom: 0.20rem;">Air Condition: <?php echo $row->aircondition;?></p>
					  <p style="color: black;margin-bottom: 0.20rem;">Vehicle No: <?php echo $row->vehicle_plate;?></p>
						<p style="color: black;margin-bottom: 0.20rem;">FeedBack: <?php if($feed)echo $feed->feedback;?></p>
					  
					  
					  <p><button>Vehicle Rate:<?php echo $row->vehicle_rate.'/Per Day';?></button></p>
					</div>
					
					
				</div>
				<div class="col-md-6">
				
				
			  <form action="<?php echo base_url();?>Admin_controller/putorder2" method="post">
			  <h2>Put Your Order</h2>
				
			  
				<p>
				  <input type="hidden" name="curr_rate" value="<?php echo $row->vehicle_rate;?>">
				</p>
				  <input id="vehicle_name" name="vehicle_id" value="<?php echo $row->vehicle_id;?>" type="hidden">
				<p>
			
				  <input id="customer_id" name="customer_id" value="<?php echo $this->tank_auth->get_user_id();?>" type="hidden">
				  
				</p>
				
				<p>
				  <label for="start_date" class="floatLabel">Start Date</label>
				  <input class="start_date" style="padding: 14px 0px; font-size: 14px;" name="start_date" min="<?php echo date('Y-m-d');?>" type="date">
				</p>
				
				<p>
				  <label for="end_date" class="floatLabel">End date</label>
				  <input class="end_date" style="padding: 14px 0px; font-size: 14px;" name="end_date" min="<?php echo date('Y-m-d');?>" type="date">
				</p>

			   <p>
				<input id="vehicle_status" name="vehicle_status" value="pending" type="hidden">
			   </p>


				<p>
				  <input type="submit" class="btn btn-lg btn-info col-lg-12" value="Book Now" id="submit">
				</p>
			  </form>
			  <?php
			}
			  }
			?>
			</div>
		</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>


          

        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      
      <!-- /.row (main row) -->

    </section>
	</div>
    <!-- /.content -->
  </div>
 </div>
 <?php }  
	?> 
	<?php if($this->tank_auth->get_user_type() == 'driver'){?>
	  <div style="padding: 8% 0%;text-align: center;" class="content-wrapper">
	  <h3 style="color:green;">"You Are Not Supposed To Order A Car, Register As A Customer To Order"</h3>
	  
	  </div>
	   <?php }  
	?> 
	<?php if($this->tank_auth->get_user_type() == 'admin'){?>
	  <div style="padding: 8% 0%;text-align: center;" class="content-wrapper">
	  <h3 style="color:green;">"You Are Not Supposed To Order A Car, Register As A Customer To Order"</h3>
	  
	  </div>
	   <?php }  
	?> 
 <script>
	$('.end_date').change(function(){
		//alert('hello');
		var end_date = $(this).val();
		
		$('.start_date').attr('max',end_date);
	});
	
	$('.start_date').change(function(){
		//alert('hello');
		var start_date = $(this).val();
		
		$('.end_date').attr('min',start_date);
	});
 </script>
 
  <?php $this->load->view('new_footer')?>