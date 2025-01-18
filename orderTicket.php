<?php
include('config.php');
include('ticket.html');
if(!empty($_POST['name']) && !empty($_POST['phoneNum']) && !empty($_POST['sheet'])){

$name=$_POST['name'];
$phoneNum=$_POST['phoneNum'];
$sheet=$_POST['sheet'];
$query ="UPDATE route_sheet
Set sold_space=sold_space+1
Where route_sheet.id_sheet='$sheet'";
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

$query = "INSERT passangers(num_sheet, passanger_name, passanger_phone) 
VALUES ('$sheet', '$name', '$phoneNum');"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
?> 