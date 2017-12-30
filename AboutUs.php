<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body{
	background-color:#A9A9A9;
	color:black;
	font-family:serif;
	font-size:30px;
}
.mySlides {display:none;height:220px;
	width:220px;
	border-radius:85px;
	left:700px;}
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
<body>
<a href = "Index.php"><img id="home" src="Homebutton.png"></a>
<h2 class="w3-center">About Us</h2>

<div class="w3-content w3-section" style="max-width:220px;float:right;">
  <img class="mySlides" src="Viraj.jpg" style="width:100%">
  <img class="mySlides" src="drishti.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<p>
Sport-a-Shop is an e-shopping website that allows you to buy <br>sports items from a wide variety of sports,focusing on Badminton, TT and Football. <br>
This website is developed by Saurabh Ughade and Viraj Shah, IT students. <br>
Saurabh Ughade is a back-end developer and is well versed with SEO. <br>
Viraj Shah is a front-end and back-end developer. <br>
Engineered in KJSCE.</p>
</body>
</html>
