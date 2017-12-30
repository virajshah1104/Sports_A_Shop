<?php
session_start();
$temp1 = $_GET["id"];
$temp1 -= 1;
if(isset($_SESSION["items"])){
    $i = sizeof($_SESSION["items"]);
    $data = $_SESSION["items"];    // Get the value               // Remove an item (hardcoded the second here)
    if (($key = array_search($temp1, $data)) !== false)
    unset($data[$key]);
    $_SESSION["items"] = array_values($data);
    header('Location:Cart.php');
}
else if(isset($_SESSION["items1"])){
    $i = sizeof($_SESSION["items1"]);
    $data = $_SESSION["items1"];    // Get the value               // Remove an item (hardcoded the second here)
    if (($key = array_search($temp1, $data)) !== false)
    unset($data[$key]);
    $_SESSION["items1"] = array_values($data);
    header('Location:Cart.php');
}
    ?>