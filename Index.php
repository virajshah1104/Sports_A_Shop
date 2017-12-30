<?php
session_start();
if(isset($_SESSION["done"]))
{
	if($_SESSION["done"] == true){
	$_SESSION["items"] = array();
	$_SESSION["done"] = false;
	}
	}
?>
<html>
    <title>Sport-a-Shop: One stop sports shop</title>
<head>
    <meta content="Sport-a-Shop is an e-shopping website that allows you to buy sports items from a wide variety of sports. It primarily focuses on Badminton, TT and Football"></meta>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
body{
margin: 0px;
background-color:black;
overflow:hidden;
}
#top{
	
background-color:black;
padding-top: 25px;
height: 80px;
color:white;
font-size: 25px;
}

ul {
    /list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
  
    float: left;
    
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}


.mySlides {
display:none;
}
.w3-left, .w3-right{
cursor:pointer;
position: relative;
top: -220px;
color: white;
}
.w3-left, .w3-right: hover{
box-shadow: rgba(0,0,0,0.5);
}

.w3-badge {
height:13px;
width:13px;
padding:0}

.material-icons {
float:right;
vertical-align:-1%
size:30px;
}

.mySlides
{
    width: 80%;
    height: 80%;
}
.abc{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
float: right;
}

li {
    float: left;
}

li a {
    
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
}
img{
    margin-top:0px;
    height:25px;
    width:25px;
    cursor:pointer;
}


</style>
</head>
<body>
    <p hidden>sport sport</p>
<div id="top">
<center>Shop by your sport!</center>

</div>

<div id="top2">
<div class="abc"><ul>
    <li><a href = "Cart.php"><img src="https://www.materialui.co/materialIcons/maps/local_grocery_store_white_192x192.png"></a></li>
    <?php
        if(isset($_SESSION["userid"]))
            echo "<li><a href='Logout.php'>Log Out</a></li>";
        else
        {
            echo "<li><a href='Login.php'>Login</a></li>";
            echo "<li><a href='Signup.php'>Signup</a></li>";
        }
    ?>
  
</ul></div>

<ul>
  
  <li><a href="Badminton.php">Badminton</a></li>
  <li><a href="TT.php">Table tennis</a></li>
  <li><a href="Football.php">Football</a></li>
  <li><a href="Aboutus.php">About Us</a></li>
  <li><a href="Contact.php">Contact Us</a></li>
</ul>

</div>
<div class="w3-content w3-display-container" style="max-width:100%">
 <center><img class="mySlides" src="nike.png">
 <img class="mySlides" src="lawntennis.jpg">
 <img class="mySlides" src="football.jpg">
 <img class="mySlides" src="adidas.jpg"></center>
  <div class="w3-center w3-container w3-section w3-large w3-text-black w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-black" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-black" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-black" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-black" onclick="currentDiv(4)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
</body>
</html>