<?php
session_start();

$_SESSION['type']="Oneway";
$_SESSION['from']=$_POST['toastFrom'];
$_SESSION['to']=$_POST['toastTo'];
$_SESSION['start']=$_POST['toastDate'];

$_SESSION['kmH']=13;
$_SESSION['kmSe']=14;
$_SESSION['kmS']=18;
$_SESSION['kmV']=18;
$_SESSION['kmT']=17;

$origin="Kumbakonam";
$destination="Chennai";
$api = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyDZBe5SOKG2cfOa-YekQ5aMBP1Qb4cKXUY");
$data = json_decode($api);

$_SESSION['distance']=((int)$data->rows[0]->elements[0]->distance->value / 1000);
$_SESSION['distance']=round($_SESSION['distance']);
$_SESSION['travelTime']=$data->rows[0]->elements[0]->duration->text;

$_SESSION['amtH']=round($_SESSION['distance']*13)+300;
$_SESSION['amtSe']=round($_SESSION['distance']*14)+300;
$_SESSION['amtS']=round($_SESSION['distance']*18)+300;
$_SESSION['amtT']=round($_SESSION['distance']*17)+300;
$_SESSION['amtV']=round($_SESSION['distance']*18)+600;

header('location:../selection.php');

?>