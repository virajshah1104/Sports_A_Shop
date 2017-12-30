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
    <title>Table Tennis Section: Sport-a-shop </title>
    <meta content="The Table Tennis Section of Sport-a-Shop. This section consists of footballs, studs and goalkeeper gloves along with shin guards. All famous brands are present."></meta>
<head>
<link href="products.css" rel="stylesheet" type="text/css">
</head>
<body>
<a href = "Index.php"><img id="home" src="Homebutton.png"></a>
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
    <img src="https://images-na.ssl-images-amazon.com/images/I/51fiDwzEiIL._AC_US218_.jpg" />
    <h1><?php echo $name[8];?></h1>
	<p><?php echo $price[8];?></p>
<button class="add"><a class="addtocart" href="Addtocart.php?id=8&s=2">Add to cart</a></button>
    
  </li>
  <li class="product">
    <img src="https://images-na.ssl-images-amazon.com/images/I/21XJ+QL8HCL._AC_US218_.jpg" />
    <h1><?php echo $name[9];?></h1>
	<p> <?php echo $price[9];?></p>
<button class="add"><a class="addtocart" href="Addtocart.php?id=9&s=2">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-na.ssl-images-amazon.com/images/I/41QpT767kbL._AC_US218_.jpg" />
    <h1><?php echo $name[10];?></h1>
<p><?php echo $price[10];?></p>
<button class="add"><a class="addtocart" href="Addtocart.php?id=10&s=2">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-na.ssl-images-amazon.com/images/I/51qc7g7gHPL._AC_US218_.jpg "/>
    <h1><?php echo $name[11];?></h1>
	<P><?php echo $price[11];?></p>
	<button class="add"><a class="addtocart" href="Addtocart.php?id=11&s=2">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-na.ssl-images-amazon.com/images/I/31j6YJXgH-L._AC_US218_.jpg" />
    <h1><?php echo $name[12];?></h1>
<p> <?php echo $price[12];?></p>
<button class="add"><a class="addtocart" href="Addtocart.php?id=12&s=2">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-na.ssl-images-amazon.com/images/I/51IFe7DPD4L._AC_US218_.jpg" />
    <h1><?php echo $name[13];?></h1>
<p><?php echo $price[13];?></p>
<button class="add"><a class="addtocart" href="Addtocart.php?id=13&s=2">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-na.ssl-images-amazon.com/images/I/51NEEu-U1GL._AC_US218_.jpg" />
    <h1><?php echo $name[14];?></h1>
	<p><?php echo $price[14];?></p>
<button class="add"><a class="addtocart" href="Addtocart.php?id=14&s=2">Add to cart</a></button>
  </li>
  <li class="product">
    <img src="https://images-na.ssl-images-amazon.com/images/I/41nJ9x-b4FL._AC_US218_.jpg" />
    <h1><?php echo $name[15];?></h1>
     <p><?php echo $price[15];?></p>
	<button class="add"><a class="addtocart" href="Addtocart.php?id=15&s=2">Add to cart</a></button>
  </li>
</ul>
</div>
<p hidden>Table tennis Table tennis</p>
<p hidden>url("http://img.nowrunning.com/content/movie/2017/newto-20338/bg4.jpg?fbrefresh=120122647321")</p>

</body>
</html>