<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$time=$_POST['time'];
$method=$_POST['payment'];

$to="bismillahcabs26@gmail.com";
$subject="Feedback from customer";
$headers="MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$dbuser="m5fc2zgidt96";
$dbpass="%an39&O0yg1";
$dbserver="localhost";
$dbname="bismillah_cabs";
$conn=mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
$sql="";

if(strcmp($_SESSION['type'],"Roundtrip")==0)
{
$message='
<html><head><style>table,td{border:1px solid black;border-collapse:collapse;padding:10px;}</style></head><body><table>
<tr><td>Ride Type</td><td>'.$_SESSION['type'].'</td><tr>
<tr><td>From</td><td>'.$_SESSION['from'].'</td><tr>
<tr><td>To</td><td>'.$_SESSION['to'].'</td><tr>
<tr><td>Starting From</td><td>'.$_SESSION['start'].'</td><tr>
<tr><td>Return To</td><td>'.$_SESSION['end'].'</td><tr>
<tr><td>Car Type</td><td>'.$_SESSION['carType'].'</td><tr>
<tr><td>Amount</td><td>'.$_SESSION['amt'].'</td><tr>
<tr><td>Name</td><td>'.$name.'</td><tr>
<tr><td>Email</td><td>'.$email.'</td><tr>
<tr><td>Phone</td><td>'.$phone.'</td><tr>
<tr><td>Pickup Address</td><td>'.$address.'</td><tr>
<tr><td>Pickup Time</td><td>'.$time.'</td><tr>
<tr><td>Payment method</td><td>'.$method.'</td><tr>
</table></body></html>
';
$ttype=$_SESSION['type'];
$tfrom=$_SESSION['from'];
$tto=$_SESSION['to'];
$tstart=$_SESSION['start'];
$tend=$_SESSION['end'];
$tcarType=$_SESSION['carType'];
$tamt=$_SESSION['amt'];
$tdistance=$_SESSION['distance'];
$sql="INSERT INTO trips (name,email,phone,pickup_address,pickup_time,payment,trip_type,city_from,city_to,start_date,end_date,car_type,amount,distance) VALUES ('$name','$email','$phone','$address','$time','$method','$ttype','$tfrom','$tto','$tstart','$tend','$tcarType','$tamt','$tdistance')";
}

if(strcmp($_SESSION['type'],"Oneway")==0)
{
$message='
<html><head><style>table,td{border:1px solid black;border-collapse:collapse;padding:10px;}</style></head><body><table>
<tr><td>Ride Type</td><td>'.$_SESSION['type'].'</td><tr>
<tr><td>From</td><td>'.$_SESSION['from'].'</td><tr>
<tr><td>To</td><td>'.$_SESSION['to'].'</td><tr>
<tr><td>Starting From</td><td>'.$_SESSION['start'].'</td><tr>
<tr><td>Car Type</td><td>'.$_SESSION['carType'].'</td><tr>
<tr><td>Amount</td><td>'.$_SESSION['amt'].'</td><tr>
<tr><td>Name</td><td>'.$name.'</td><tr>
<tr><td>Email</td><td>'.$email.'</td><tr>
<tr><td>Phone</td><td>'.$phone.'</td><tr>
<tr><td>Pickup Address</td><td>'.$address.'</td><tr>
<tr><td>Pickup Time</td><td>'.$time.'</td><tr>
<tr><td>Payment method</td><td>'.$method.'</td><tr>
</table></body></html>
';
$ttype=$_SESSION['type'];
$tfrom=$_SESSION['from'];
$tto=$_SESSION['to'];
$tstart=$_SESSION['start'];
$tcarType=$_SESSION['carType'];
$tamt=$_SESSION['amt'];
$tdistance=$_SESSION['distance'];
$sql="INSERT INTO trips (name,email,phone,pickup_address,pickup_time,payment,trip_type,city_from,city_to,start_date,car_type,amount,distance) VALUES ('$name','$email','$phone','$address','$time','$method','$ttype','$tfrom','$tto','$tstart','$tcarType','$tamt','$tdistance')";
}

if(strcmp($_SESSION['type'],"Package")==0)
{
$message='
<html><head><style>table,td{border:1px solid black;border-collapse:collapse;padding:10px;}</style></head><body><table>
<tr><td>Ride Type</td><td>'.$_SESSION['type'].'</td><tr>
<tr><td>From</td><td>'.$_SESSION['from'].'</td><tr>
<tr><td>To</td><td>'.$_SESSION['to'].'</td><tr>
<tr><td>Starting From</td><td>'.$_SESSION['start'].'</td><tr>
<tr><td>Hours</td><td>'.$_SESSION['hour'].' hour</td><tr>
<tr><td>Car Type</td><td>'.$_SESSION['carType'].'</td><tr>
<tr><td>Amount</td><td>'.$_SESSION['amt'].'</td><tr>
<tr><td>Name</td><td>'.$name.'</td><tr>
<tr><td>Email</td><td>'.$email.'</td><tr>
<tr><td>Phone</td><td>'.$phone.'</td><tr>
<tr><td>Pickup Address</td><td>'.$address.'</td><tr>
<tr><td>Pickup Time</td><td>'.$time.'</td><tr>
<tr><td>Payment method</td><td>'.$method.'</td><tr>
</table></body></html>
';
$ttype=$_SESSION['type'];
$tfrom=$_SESSION['from'];
$tto=$_SESSION['to'];
$tstart=$_SESSION['start'];
$thour=$_SESSION['hour'];
$tcarType=$_SESSION['carType'];
$tamt=$_SESSION['amt'];
$tdistance=$_SESSION['distance'];
$sql="INSERT INTO trips (name,email,phone,pickup_address,pickup_time,payment,trip_type,city_from,city_to,start_date,car_type,hours,amount,distance) VALUES ('$name','$email','$phone','$address','$time','$method','$ttype','$tfrom','$tto','$tstart','$tcarType','$thour','$tamt','$tdistance')";
}


if(mysqli_query($conn,$sql))
{
    if(mail($to,"Someone Booked a Trip",$message,$headers))
    if(mail($email,"Booking Confirmation",$message,$headers))
    if(strcmp($method,"Advance 500 paid")==0)
    {
        header('location:https://imjo.in/ByR7yV');
        session_destroy();
    }
    else
    {
        echo '<script>alert("Thank you! Your have been successfully confirmed your ride, any queries feel free to contact us. Have a happy journey.");window.location.href = "../index.html"</script>';
        session_destroy();
    }
}
else
{
    echo '<script>alert("Your registration has not been booked, We track these errors automatically, but if any problem persists feel free to contact us through mobile number!");window.location.href = "../index.html"</script>';
}

?>