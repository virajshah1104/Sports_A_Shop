<?php
$err = array("","","");
$success = false;
if(isset($_POST["submit"])){
    $check = false;
	if (empty($_POST["name"])) { $err[0] = "* Please enter your name."; } else { $name = $_POST["name"];}
	if (empty($_POST["email"])) { $err[1] = "* Please enter valid email."; } else { $email = $_POST["email"];}
	if (empty($_POST["message"])) { $err[2] = "* Please do not leave this field blank."; } else { $message = $_POST["message"];}
	for($i=0;$i<3;$i++)
	if($err[$i] != "")
	{
	    $check = true;
	    break;
	}
if($check == false)
{
	$conn = new mysqli("localhost","root","admin","sports-a-shop");
	// Check connection
	$sql = "INSERT INTO review(name,email,message) values('$name','$email','$message')";
	if($result = $conn->query($sql))
	{
		echo "<script type='text/javascript'>alert(\"Review Submitted Successfully.!\");</script>";
	}
	$conn->close();
}
	}
?>
<html>
<head>
<link rel="stylesheet" href="contactus.css">
<style>
img{
    height:50px;
    width:50px;
}
 #home{
  
    float:right;
    left:700px;
    height:50px;
    width:50px;
}
</style>
</head>
<body>
    <a href = "Index.php"><img id="home" src="Homebutton.png"></a>
<form id="contact" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <div class="container">
    <div class="head">
      <h2>Say Hello</h2>
    </div>
    <input type="text" name="name" placeholder="Name" name="name"/><br />
	<span class="error"><?php echo $err[0]; ?></span>
    <input  type="email" name="email" placeholder="Email" name="email"/><br />
	<span class="error"><?php echo $err[1]; ?></span>
    <textarea type="text" name="message" placeholder="Message" name="message"></textarea><br />
	<span class="error"><?php echo $err[2]; ?></span><br>
    <button id="submit" type="submit" name="submit">
      Send!
    </button>
  </div>
</form>
	</body>
	</html>