<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$firstname = array(
	'name'	=> 'firstname',
	'id'	=> 'firstname',
	'class' => 'floatLabel',
	'value'	=> set_value('firstname'),
	'maxlength'	=> 80,
	'size'	=> 30,
);

$lastname = array(
	'name'	=> 'lastname',
	'id'	=> 'lastname',
	'class' => 'floatLabel',
	'value'	=> set_value('lastname'),
	'maxlength'	=> 80,
	'size'	=> 30,
);

$address = array(
	'name'	=> 'address',
	'id'	=> 'address',
	'class' => 'floatLabel',
	'value'	=> set_value('address'),
	'maxlength'	=> 80,
	'size'	=> 30,
);

$mobile = array(
	'name'	=> 'mobile',
	'id'	=> 'mobile',
	'class' => 'floatLabel',
	'value'	=> set_value('mobile'),
	'maxlength'	=> 80,
	'size'	=> 30,
);

$user_type = array(
	'name'	=> 'user_type',
	'id'	=> 'user_type',
	'class' => 'floatLabel',
	'value'	=> set_value('user_type'),
	'maxlength'	=> 80,
	'size'	=> 30,
);


$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form with live validation</title>
  
  
  
      <link rel="stylesheet" href="<?php echo base_url();?>assets/register/css/style.css">

  
</head>

<body>

  <form action="<?php echo base_url();?>auth/register2" method="post" enctype="multipart/form-data">
  <h2>Sign Up</h2>
		
		<p>
		<label for="Username" class="floatLabel" id="username">Username</label>
		<input id="username" name="username" type="text">

		</p>

		<p>
			<label for="firstname" class="floatLabel">FirstName</label>
			<input id="firstname" name="firstname" type="text">
			
		</p>
		
		<p>
			<label for="lastname" class="floatLabel">LastsName</label>
			<input id="lastname" name="lastname" type="text">
			
		</p>
		
		<p>
			<label for="address" class="floatLabel">Address</label>
			<input id="address" name="address" type="text">
		</p>
		<p>
			<label for="mobile" class="floatLabel">Mobile</label>
			<input id="mobile" name="mobile" type="text">
		</p>
			
		<p>
			<!--<label for="user_type" class="floatLabel">User Type</label><br>-->
			<input id="user_type" name="user_type" class="floatLabel" value="driver" type="hidden">
  
		</p>
		
		<p>
			<label for="Vehicle_img" class="floatLabel">Upload Image</label><br><br>
			<input id="Vechile_img" name="image_path" type="file">
		</p>

		<p>
			<label for="email" class="floatLabel">Email</label>
			<input id="email" name="email" type="text">
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
		</p>
		<p>
			<input type="submit" value="Create My Account" id="submit">
		</p>
	</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



</body>

</html>
