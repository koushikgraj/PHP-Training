<?php
session_start();
if(isset($_POST['submit'])){
	if(empty($_POST['captcha_code'])){
		echo "Please enter captach code";
	}
	else if($_POST['captcha_code'] == $_SESSION['captcha']['code'])
	{
		echo "Matched succesfully<br><pre>";
		print_r($_SESSION['captcha']);
		echo "</pre>";
	}
	else{
		echo "Captcha code is not matching";
	}
}
$_SESSION = array();
include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Example &raquo; A simple PHP CAPTCHA script</title>
	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
    <h3>Contact Form</h3>

	<div class="container">
	  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
		<label for="fname">First Name</label>
		<input type="text" id="fname" name="firstname" placeholder="Your name..">

		<label for="lname">Last Name</label>
		<input type="text" id="lname" name="lastname" placeholder="Your last name..">

		<label for="country">Country</label>
		<select id="country" name="country">
		  <option value="usa">India</option>
		  <option value="australia">Australia</option>
		  <option value="canada">Canada</option>
		  <option value="usa">USA</option>
		</select>
		
		<label for="subject">Subject</label>
		<textarea id="subject" name="subject" placeholder="Write something.." style="height:160px"></textarea>
		<input type="text" id="captcha_code" name="captcha_code" placeholder="Enter CAPTCHA code" style="width:200px;">
		<p>
			<?php
			echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';

			?>
		</p>
		<input type="submit" name="submit" value="Submit">
	  </form>
	</div>

</body>
</html>