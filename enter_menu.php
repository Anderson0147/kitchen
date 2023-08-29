<?php
$fd = $_POST['food'];
$pr = $_POST['pri'];
include("connect/connect.php");
$query="INSERT INTO menu(foodname,price)
value('$fd','$pr')";
$result= mysqli_query($connection,$query);
if($result){
    echo('submited');
}else{
    echo('not connected');
}
?>