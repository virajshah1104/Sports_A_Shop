<?php
session_start();
$total = 0;
$conn = new mysqli("localhost","root","admin","sports-a-shop");
$i=0;
$i1=0;
if(isset($_SESSION["items"]))
{
    $i = sizeof($_SESSION["items"]);
}
else if (isset($_SESSION["items1"]))
{
    $i1 = sizeof($_SESSION["items1"]);
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <style>
    body{
        background-color:gray;
    }
        #remove{
            top:5px;
            height:20px;
            width:20px;
            position:relative;
        left:10px;
        }
        #home{
  
    float:right;
    left:700px;
    height:50px;
    width:50px;
}
    </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Shopping Cart Checkout Widget</title>
  <link rel="stylesheet" href="style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body style="background-color:gray;">
    <a href = "Index.php"><img id="home" src="Homebutton.png"></a>
  <div class="cart">
    <div class="cart-top">
      <h2 class="cart-top-title">Checkout</h2>
      <div class="cart-top-info"><?php echo "$i items" ?></div>
    </div>

    <ul>
        <?php
        if($i>0){
        for($z=0;$z<$i;$z++){
            $temp = $_SESSION["items"][$z];
            $temp+=1;
            $sql = "SELECT name,price FROM products where pid = $temp";
                    	$result = $conn->query($sql);
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $name = $row['name'];
                            $price = $row['price'];
                        }
            echo "<li class='cart-item'>";
            echo "<span class='cart-item-pic'>";
            echo "<img src='http://upload.wikimedia.org/wikipedia/en/a/a7/Random_Access_Memories.jpg'>";
            echo "</span>";
            echo $name;
            echo "<span class='cart-item-price'>Rs.$price";
            echo "<a href = 'Remove.php?id=$temp'><img id='remove' src='https://png.icons8.com/?id=45&size=280'></a>";
            echo "</span>";
            echo "</li>";
            $total+=$price;
        }
        }
        else if($i1>0)
        {
            for($z=0;$z<$i1;$z++){
            $temp = $_SESSION["items1"][$z];
            $temp+=1;
            $sql = "SELECT name,price FROM products where pid = $temp";
                    	$result = $conn->query($sql);
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $name = $row['name'];
                            $price = $row['price'];
                        }
            echo "<li class='cart-item'>";
            echo "<span class='cart-item-pic'>";
            echo "<img src='http://upload.wikimedia.org/wikipedia/en/a/a7/Random_Access_Memories.jpg'>";
            echo "</span>";
            echo $name;
            echo "<span class='cart-item-price'>Rs.$price";
            echo "<a href = 'Remove.php?id=$temp'><img id='remove' src='https://png.icons8.com/?id=45&size=280'></a>";
            echo "</span>";
            echo "</li>";
            $total+=$price;
        }
        }
      ?>
    </ul>
    <div class="cart-bottom" style="top:500px;">
      <?php echo "Total : Rs. $total"; ?>
      <?php
      if($i > 0)
      echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='Receipt.php'  class='cart-button'>Proceed to Checkout</a>";
      else if($i1>0)
      echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='Login.php' class='cart-button'>Proceed to Checkout</a>";
  else
	  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='Index.php' class='cart-button'>Shop for more</a>";
      ?>
    </div>
  </div>
</body>
</html>