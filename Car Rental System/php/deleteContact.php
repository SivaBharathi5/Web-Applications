<?php
$dbuser="m5fc2zgidt96";
$dbpass="%an39&O0yg1";
$dbserver="localhost";
$dbname="bismillah_cabs";
$conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
$id=$_POST['delete'];
$sql="DELETE FROM messages WHERE id='$id'";
mysqli_query($conn,$sql);
header('location:../message.php');
?>
