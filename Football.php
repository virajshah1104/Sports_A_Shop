<?php 
    $conn = new mysqli("localhost","root","admin","sports-a-shop");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		$i=0;
		$sql = "SELECT name,price FROM products";
                    	$result = $conn->query($sql);
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $name[$i] = $row['name'];
                            $price[$i] = $row['price'];
                            $i++;
                        }
?>
<html>
    <title>Football Section: Sport-a-shop </title>
<head>
    <meta cotnent="The Football Section of Sport-a-Shop. This section consists of footballs, studs and goalkeeper gloves along with shin guards. All famous brands are present."></meta>
<link href="products.css" rel="stylesheet" type="text/css">
</head>
<body>
<a href = "Index.php"><img id="home" src="Homebutton.png"></a>
    <p hidden>football football</p>
    <p hidden>url("http://img.nowrunning.com/content/movie/2017/newto-20338/bg4.jpg?fbrefresh=120122647321")</p>
<div id="top">
<center>Shop by your sport!</center>
</div>

<div id="leftside">
<div id="cart">
<a href="Cart.php">
<img id="img1" src="https://www.materialui.co/materialIcons/maps/local_grocery_store_white_192x192.png">&nbsp&nbsp&nbsp YOUR CART</a></div>
<br>
<p class="p01">OUR PRODUCTS</p>
<ul>
<li><a href="Badminton.php">BADMINTON</a></li>
<li><a href="TT.php">TABLE TENNIS</a></li>
<li><a href="Football.php">FOOTBALL</a></li>
</ul>
</div>
<div id="right"><ul class="products">
  <li class="product">
    <img src="https://images-eu.ssl-images-amazon.com/images/I/51apdVKPXXL._AC_US218_FMwebp_QL70_.jpg" />
    <h1><?php echo $name[16]; ?> </h1>
     <p><?php echo $price[16]; ?></p>
	<button class="add"><a class="addtocart" href="Addtocart.php?id=16&s=3">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-eu.ssl-images-amazon.com/images/I/51MHBpTD8hL._AC_US218_FMwebp_QL70_.jpg" />
    <h1><?php echo $name[17]; ?></h1>
	<p><?php echo $price[17]; ?></p>
<button class="add"><a class="addtocart" href="Addtocart.php?id=17&s=3">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-eu.ssl-images-amazon.com/images/I/61n4vxCuT2L._AC_US218_.jpg" />
    <h1><?php echo $name[18]; ?></h1>
	<p><?php echo $price[18]; ?></p>
<button class="add"><a class= "addtocart" href="Addtocart.php?id=18&s=3">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-eu.ssl-images-amazon.com/images/I/51OUyCFr89L._AC_US218_.jpg" />
    <h1><?php echo $name[19]; ?></h1>
<p><?php echo $price[19]; ?></p>
<button class="add"><a class= "addtocart" href="Addtocart.php?id=19&s=3">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-eu.ssl-images-amazon.com/images/I/41q3j-rd6YL._AC_US218_.jpg"/>
    <h1><?php echo $name[20]; ?></h1>
	<p><?php echo $price[20]; ?></p>
	<button class="add"><a class= "addtocart" href="Addtocart.php?id=20&s=3">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-eu.ssl-images-amazon.com/images/I/41zPoID+jSL._AC_US218_.jpg" />
    <h1><?php echo $name[21]; ?></h1>
<p> <?php echo $price[21]; ?></p>
<button class="add"><a class= "addtocart" href="Addtocart.php?id=21&s=3">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-eu.ssl-images-amazon.com/images/I/41BIwTwljVL._AC_US218_.jpg" />
    <h1><?php echo $name[22]; ?></h1>
<p><?php echo $price[22]; ?></p>
<button class="add"><a class="addtocart" href="Addtocart.php?id=22&s=3">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-eu.ssl-images-amazon.com/images/I/414ahrJ9raL._AC_US218_.jpg" />
    <h1><?php echo $name[23]; ?></h1>
	<p><?php echo $name[23]; ?></p>
<button class="add"><a class= "addtocart" href="Addtocart.php?id=23&s=3">Add to cart</a></button>
  </li>
</ul>
</div>
</body>
</html>