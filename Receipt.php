<?php
session_start();
 $conn = new mysqli("localhost","root","admin","sports-a-shop");
 $i = sizeof($_SESSION["items"]);
 $total = 0;
 $_SESSION["done"]=true;
?>
<html>
    <title>Receipt Final Section: Sport-a-shop </title>
<head>
    <meta content="The final receipt for a purchase is generated here. The number of items purchased along with their names and prices is printed. Grand total is calculated on GST"></meta>
<style>
body{
	background-color:gray;
}
img{
	width:100px;
	height:100px;
}
fieldset{
	width:300px;
	height:500px;
	border-color:black;
	background-color:white;
}
table{
	border-collapse:collapse;
	border-bottom: 1px solid black;
}
th{
	text-align:left;
	width:100px;
	height:20px;
}
td{
	text-align:left;
	width:110px;
	height:30px;
	border-bottom: 1px solid black;
}
#total{
	border-bottom:none;
}
#home{
    float:right;
    left:1100px;
    height:50px;
    width:50px;
    position:fixed;
}
</style>
</head>
<body>
<a href = "Index.php"><img id="home" src="Homebutton.png"></a>
<center>
<fieldset id="receipt">
<img style="height:50px; width:50px;"src="receipt.png">
<h1>Payment receipt</h1>
<table>
<tr>
<th>Item</th>
<th> &nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp &nbsp&nbsp&nbspPrice</th>
</tr>
    <?php
        for($z=0;$z<$i;$z++){
            echo "<tr>";
            $temp = $_SESSION["items"][$z];
            $temp+=1;
            $sql = "SELECT name,price FROM products where pid = $temp";
                    	$result = $conn->query($sql);
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $name = $row['name'];
                            $price = $row['price'];
                        }
            echo "<td>$name  &nbsp&nbsp&nbsp</td>";
            echo "<td>&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp &nbsp&nbsp&nbspRs.$price</td>";
            $total+=$price;
            echo "</tr>";
            }
      ?>
</table><br><br>
<?php
$gst = 0.09 * $total;
$st = $total+(0.09*$total);
?>
<div id="total">
<table>
<tr>
<td>Sub total</td>
<?php echo "<td>&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp &nbsp&nbsp&nbspRs.$total</td>"; ?>
</tr>
<tr>
<td>CGST(9%)</td>
<?php echo "<td>&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp &nbsp&nbsp&nbspRs.$gst</td>"; ?>
</tr>
<tr>
<td>SGST(9%)</td>
<?php echo "<td>&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp &nbsp&nbsp&nbspRs.$gst</td>"; ?>
</tr>
<tr>
<td><b>Grand total<b></td>
<?php echo "<td><b>&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRs.$st</b></td>"; ?>
</tr>
</table>
</fieldset>
</center>
<p hidden>url("http://img.nowrunning.com/content/movie/2017/newto-20338/bg4.jpg?fbrefresh=120122647321")</p>
</body>
</html>