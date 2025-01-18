<?php
include('config.php');
if(!empty($_POST['start']) && !empty($_POST['destination']) && ($_POST['distance']) && !empty($_POST['duration']) && !empty($_POST['price'])){
$start=$_POST['start'];
$destination=$_POST['destination'];
$distance=$_POST['distance'];
$duration=$_POST['duration'];
$price=$_POST['price'];

$query = "INSERT routes(start, destination, distance,duration,price) 
VALUES ('$start', '$destination', '$distance', '$duration', '$price')"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 