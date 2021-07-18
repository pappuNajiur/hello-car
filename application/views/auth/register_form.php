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

<?php $this->load->view('front/inc/new_header');?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
		<script src="<?php echo base_url();?>assets/js/sweetalert.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/my_css/sweetalert.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/register/css/style.css">
<body>
  <?php if($reg_status == 'success'){ ?>
        <script>
            swal({
              title: "Successfully registered. Check your email to activate your account.",
              text: "<br /><a class='btn btn-info btn-lg' href='<?php echo base_url();?>' style='text-decoration: underline;'><b>Login Now</b></a></small>",
              type: "success",
              html: true,
              showCancelButton: false,
              closeOnConfirm: false,
              showConfirmButton: false,
              closeOnCancel: false
            });
        </script>
        <style>
            .confirm{
                display:none !important;
            }
        </style>
    <?php } ?>
<style>
form input[type="text"], form input[type="password"], form input[type="email"], form input[type="tel"], form input[type="file"] {
    background: #fff;
    border: 1px solid #dbdbdb;
    font-size: 1.6em;
    padding: .8em .5em;
    border-radius: 2px;
}

	select{font-size: 15px;}
	select option{font-size: 15px;}
	b, sup, sub, u, del{ color: #fff;}
</style>

<?php /*  if($this->session->flashdata('message') != ''){?>
<script>
	swal('You have successfully registered. Check your email address to activate your account.','Success','success');
</script>
<?php } */ ?>
  <form action="<?php echo base_url();?>auth/register" method="post" enctype="multipart/form-data" name="myform">
  <h2 style="">Sign Up</h2>
		<p>
		<label for="Username" class="floatLabel" id="username">Username</label>
		<input id="username" 
		name="username"
		type="text" pattern="^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){4,18}[a-zA-Z0-9]$"
		title="Username must be 6-12 characters of length">
		

		</p>

		<p>
			<label for="firstname" class="floatLabel">FirstName</label>
			<input id="firstname" name="firstname" type="text" pattern="[A-Za-z\D]{3,12}" >
			
		</p>
		
		<p>
			<label for="lastname" class="floatLabel" pattern="[A-Za-z\D]{3,12}">LastName</label>
			<input id="lastname" name="lastname" type="text">
			
		</p>
		
		<p>
			<label for="address" class="floatLabel">Address</label>
			<input id="address" name="address" type="text">
		</p>
		<p>
			<label  for="mobile" class="floatLabel">Mobile</label>
			<input  id="mobile" name="mobile" type="text" maxlength="11" onkeypress=" return isNumber(event)" placeholder="E.X: 0171589632">
		</p>
		
		<!--<input type="text" name="country_code" pattern="[0-9]+" title="please enter number only" required="required">-->
			
			<p>
			<label for="user_type" class="floatLabel">User Type</label><br>
			<select id="user_type" name="user_type" class="floatLabel">
  		       <option style="font-size: 12px;"value="">Select</option>
                 <option style="font-size: 12px;" value="driver">Driver</option>
			     <option style="font-size: 12px;" value="customer">Customer</option>
                 
                
			</select>
		</p>
		
		<p>
			<label for="Vehicle_img" class="floatLabel">Upload Image</label>
			<input id="Vechile_img" name="image_path" type="file">
		</p>

		<p>
			<label for="email" class="floatLabel">Email</label>
			<input id="email" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
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
		<!--<input type="checkbox" onclick="myFunction()">Show Password-->
		<p>
			<input type="submit" value="Create Account" id="submit">
		</p>
	</form>
	
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>



  

    <script  src="<?php echo base_url();?>assets/register/js/index.js"></script>
<!--<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>-->
<script>
function isNumber(evt)
		 {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true; }
	</script>
	
	<script>
	function validate()
{
  var a=documents.forms["myform"]["password"].value;
  var b=documents.forms["myform"]["confirm_password"].value;
  if(!(a==b))
  {
    alert("both passwords are not matching");
    return false;
  }
  return true;
}
	</script>
	
	</body>

<?php $this->load->view('front/inc/new_footer');?>
