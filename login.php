<?php
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$ph=$_POST["phone"];
$pw= $_POST["rpass"];


include('connect/connect.php');
$query="INSERT INTO customer_table(fname,lname,phone,pword)
value('$fn','$ln','$ph','$pw')";
$result = mysqli_query($connection,$query);
if($result){
    echo('submited');
}else{
    echo('not connected');
}
?>

