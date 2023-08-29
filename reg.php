<?php
$fn = $_POST['fname'];
$em = $_POST['mail'];
$pn = $_POST['phone'];
$pw = $_POST['pass'];

include('connect/connect.php');
$query="INSERT INTO attendant (aname,email,phone,pass)
value('$fn','$em','$pn','$pw')";
$result= mysqli_query($connection,$query);
if($result){
    echo('submited');
}else{
    echo('not connected');
}

?>