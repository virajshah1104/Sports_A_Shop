<?php
session_start();
$v =  $_GET["id"];
$s = $_GET["s"];
if(isset($_SESSION["items"])){
array_push($_SESSION["items"],$v);
}
else if(isset($_SESSION["items1"])){
  array_push($_SESSION["items1"],$v);  
}
else{
    $_SESSION["items1"] = array();
    array_push($_SESSION["items1"],$v);
}
if($s == 1)
header('Location:Badminton.php');
else if ($s == 2)
header('Location:TT.php');
else if($s == 3)
header('Location:Football.php')
?>