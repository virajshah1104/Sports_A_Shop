<?php

    session_start();

$err = array("","","","");
if(isset($_POST["submit"])){
    $check = false;
if (empty($_POST["name"])) { $err[0] = "* Name is required"; } else { $name = $_POST["name"]; if (!preg_match("/^[a-zA-Z ]*$/",$name)) { $err[0] = "* Only letters and white space allowed";}}
if (empty($_POST["email"])) { $err[1] = "* Email is required"; } else {  $email = $_POST["email"]; if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $err[1] = "* Invalid email format"; }}
if (empty($_POST["pass"])) { $err[2] = "* Password is required"; } else { $pass = $_POST["pass"]; if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $pass)) { $err[2] = "* Invalid password format"; }}
if (empty($_POST["retypepass"])) { $err[3] = "* Confirm Password required"; } else { $retypepass = $_POST["retypepass"]; if($pass != $retypepass){ $err[3] = "* Password and Confirm password do not match";}}
for($i=0;$i<4;$i++)
    if($err[$i] != "")
    {
        $check = true;
        break;
    }

if($check == false)
{
	$conn = new mysqli("localhost","root","admin","sports-a-shop");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 
	$sql = "INSERT INTO user(username,email,password) VALUES('$name','$email','$pass')";
	$sql_result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
	$sql2 = "select uid from user where email='$email'";
	$sql2_result = mysqli_query($conn,$sql2) or die(mysqli_error($conn));
	$row = mysqli_fetch_array($sql2_result);
	$userid = $row['uid'];
	$_SESSION["userid"] = $userid;
    $_SESSION["items"] = array();
    if(isset($_SESSION["items1"])){
    $_SESSION["items"] = $_SESSION["items1"];
    $_SESSION["items1"] = array();}
	header('Location: Index.php');	
}
}
?>
<html>
<body>
<head><style>
    #home{
    top:5px;
    float:right;
    left:700px;
    height:50px;
    width:50px;
}
</style>
  <meta charset="UTF-8">
  <title>Sign up Form</title>

      <link rel="stylesheet" href="form.css">

  
</head>

<a href="Index.php"><img id="home"src="Homebutton.png"></a>
 <div class="login-wrap">
	<div class="login-html">
	
<div class="login-form">
<div class="sign-up-htm">
<form action="Login.php">
<input type="submit"  class="button1" name="signin"  value="Sign in">

</form>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="group">
					<input id="user" type="text" class="input" placeholder="Username" name = "name">
					<span class="error"><?php echo $err[0];?></span>
				</div>
				<div class="group">
					
					<input id="pass" type="text" class="input" placeholder="Email id" name = "email">
					<span class="error"><?php echo $err[1];?></span>
				</div>
				<div class="group">
					
					<input id="pass" type="password" class="input" data-type="password" placeholder="Password" name = "pass">
					<span class="error"><?php echo $err[2];?></span>
				</div>
				<div class="group">
					
					<input id="pass" type="password" class="input" data-type="password" placeholder="Confirm Password" name = "retypepass">
					<span class="error"><?php echo $err[3];?></span>
				</div>
				
				<div class="group">
					<input type="submit" style="color:white;"class="button" value="Sign Up" name = "submit">
				</div>
				<div class="hr"></div>
				</div>
				</div>
				</div>
			
</form>