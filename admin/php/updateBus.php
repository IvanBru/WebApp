<?php
include('config.php');
if(!empty($_POST['sideNumber']) && !empty($_POST['carNumber']) && !empty($_POST['year']) && !empty($_POST['milage'])){
$sideNumber=$_POST['sideNumber'];
$carNumber=$_POST['carNumber'];
$model=$_POST['modelName'];
$year=$_POST['year'];
$milage=$_POST['milage'];
$key=$_POST['keyUpdate'];
//mysqli_query($link,'SET foreign_key_checks = 0');
$query="
Update buses
 Set side_number='$sideNumber' , car_number='$carNumber',model='$model',year='$year',milage='$milage'
 Where buses.id_bus='$key'";
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
//mysqli_query($link,'SET foreign_key_checks = 1');

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?>