<?php
include('config.php');
if(!empty($_POST['start']) && !empty($_POST['destination']) && ($_POST['distance']) && !empty($_POST['duration']) && !empty($_POST['price'])){
echo"<script type='text/javascript'>alert('Круто!');</script>";
$start=$_POST['start'];
$destination=$_POST['destination'];
$distance=$_POST['distance'];
$duration=$_POST['duration'];
$price=$_POST['price'];
$key=$_POST['keyUpdate'];
//mysqli_query($link,'SET foreign_key_checks = 0');
$query="
Update routes
 Set start='$start' , destination='$destination',distance='$distance',duration='$duration',price='$price'
 Where id_route='$key'";
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
//mysqli_query($link,'SET foreign_key_checks = 1');

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?>