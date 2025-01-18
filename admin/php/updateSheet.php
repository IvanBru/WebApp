<?php
include('config.php');
if(!empty($_POST['id_rou']) && ($_POST['dateTime']) && !empty($_POST['driver']) && !empty($_POST['bus'])){
echo"<script type='text/javascript'>alert('Круто!');</script>";
$id_rou=$_POST['id_rou'];
$dateTime=$_POST['dateTime'];
$sold_space=$_POST['sold_space'];
$driver=$_POST['driver'];
$bus=$_POST['bus'];
$key=$_POST['keyUpdate'];
//mysqli_query($link,'SET foreign_key_checks = 0');
$query="
Update route_sheet
 Set id_rou='$id_rou' , dateTime='$dateTime',sold_space='$sold_space',driver='$driver',bus='$bus'
 Where id_sheet='$key'";
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
//mysqli_query($link,'SET foreign_key_checks = 1');

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?>