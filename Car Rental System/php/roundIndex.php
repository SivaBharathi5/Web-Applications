<?php
session_start();
$_SESSION['type']="Roundtrip";
$_SESSION['from']=$_POST['fromRound'];
$_SESSION['to']=$_POST['toRound'];
$_SESSION['start']=$_POST['startRound'];
$_SESSION['end']=$_POST['returnRound'];

$_SESSION['kmH']=10;
$_SESSION['kmSe']=11;
$_SESSION['kmS']=13;
$_SESSION['kmV']=18;
$_SESSION['kmT']=12;

$tempArray=explode(", ",$_POST['fromRound']);
$origin=str_replace(" ", "+", $tempArray[0]);
$tempArray=explode(", ",$_POST['toRound']);
$destination=str_replace(" ", "+", $tempArray[0]);
$api = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyDZBe5SOKG2cfOa-YekQ5aMBP1Qb4cKXUY");
$data = json_decode($api);

$_SESSION['distance']=((int)$data->rows[0]->elements[0]->distance->value / 1000)*2;


$_SESSION['distance']=round($_SESSION['distance']);

$_SESSION['travelTime']=$data->rows[0]->elements[0]->duration->text;

$days_between = floor(abs(strtotime($_SESSION['end']) - strtotime($_SESSION['start'])) / 86400);

if($days_between>2)
$_SESSION['distance']=250*($days_between+1);

$_SESSION['amtH']=round($_SESSION['distance']*10) + 300*($days_between+1);
$_SESSION['amtSe']=round($_SESSION['distance']*11) + 300*($days_between+1);
$_SESSION['amtS']=round($_SESSION['distance']*13) + 300*($days_between+1);
$_SESSION['amtT']=round($_SESSION['distance']*12) + 300*($days_between+1);
$_SESSION['amtV']=round($_SESSION['distance']*18) + 500*($days_between+1);

header('location:../selection.php');
?>