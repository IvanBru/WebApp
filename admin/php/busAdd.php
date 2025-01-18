<?php
include('config.php');
if(!empty($_POST['sideNumber']) && !empty($_POST['carNumber']) && ($_POST['model'])!=0 && !empty($_POST['year']) && !empty($_POST['milage'])){
$sideNumber=$_POST['sideNumber'];
$carNumber=$_POST['carNumber'];
$model=$_POST['model'];
$year=$_POST['year'];
$milage=$_POST['milage'];

$query = "INSERT buses(side_number, car_number, model,year,milage) 
VALUES ('$sideNumber', '$carNumber', '$model', '$year', '$milage');"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 