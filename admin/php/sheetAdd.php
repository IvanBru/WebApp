<?php
include('config.php');
if(!empty($_POST['id_rou']) && ($_POST['dateTime']) && !empty($_POST['driver']) && !empty($_POST['bus'])){
	echo"<script type='text/javascript'>alert('Всё ок!');</script>";
$id_rou=$_POST['id_rou'];
$dateTime=$_POST['dateTime'];
$sold_space=$_POST['sold_space'];
$driver=$_POST['driver'];
$bus=$_POST['bus'];


$query = "INSERT route_sheet(id_rou, bus, sold_space,dateTime,driver) 
VALUES ('$id_rou', '$bus', '$sold_space', '$dateTime', '$driver')"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 