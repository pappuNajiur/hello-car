<?php $this->load->view('new_header');?>
<style>
.content-wrapper {
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">


	<?php if ($message != '') { ?>
<CENTER><h3 style="color:red;">Data updated successfully</h3></CENTER><br>
<?php } ?>

<?php if(isset($user_data))
	//echo hello;
	{
		foreach ($user_data->result() as $row) 
		{
				
		?>
		<form action="<?php echo base_url();?>Admin_controller/updatecustomers" method="post">
  <h2>Update Your Profile</h2>
    
    <p>
    <label for="Username" class="floatLabel" id="username">Username</label>
    <input id="username" name="username" type="text" value="<?php echo $row->username;?>">

    </p>

    <p>
      <label for="firstname" class="floatLabel">FirstName</label>
      <input id="firstname" name="firstname" type="text" value="<?php echo $row->firstname;?>">
      
    </p>
    
    <p>
      <label for="lastname" class="floatLabel">LastName</label>
      <input id="lastname" name="lastname" type="text" value="<?php echo $row->lastname;?>">
      
    </p>
    
    <p>
      <label for="address" class="floatLabel">Address</label>
      <input id="address" name="address" type="text" value="<?php echo $row->address;?>">
    </p>
    <p>
      <label for="mobile" class="floatLabel">Mobile</label>
      <input id="mobile" name="mobile" type="text" value="<?php echo $row->mobile;?>">
    </p>
      
      <p>
      
      <label for="email" class="floatLabel">Email</label>
      <input id="email" name="email" type="text" value="<?php echo $row->email;?>">
    </p>
    
   <!-- <p>
      <label for="Vehicle_img" class="floatLabel">Upload Image</label><br><br>
      <input id="Vechile_img" name="image_path" type="file">
    </p>

    <p>
      <label for="email" class="floatLabel">Email</label>
      <input id="email" name="email" type="text" value="<?php //echo $row->email;?>">
    </p>
    
    <p>
      <label for="password" class="floatLabel">Password</label>
      <input id="password" name="password" type="password">
      <span>Enter a password longer than 8 characters</span>
    </p>
    <p>
      <label for="confirm_password" class="floatLabel">Confirm Password</label>
      <input id="confirm_password" name="confirm_password" type="password">
      <span>Your passwords do not match</span>
    </p>-->
    <p>
      <input type="submit" value="update" id="submit">
    </p>
  </form>
<?php
}
	}
?>
</section>
</div>

</div>

  

 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



<?php $this->load->view('new_footer')?>