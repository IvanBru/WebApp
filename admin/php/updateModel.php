<?php
include('config.php');
if(!empty($_POST['model_name']) && !empty($_POST['places'])){
echo"<script type='text/javascript'>alert('Круто!');</script>";
$model_name=$_POST['model_name'];
$places=$_POST['places'];
$key=$_POST['keyUpdate'];
//mysqli_query($link,'SET foreign_key_checks = 0');
$query="
Update car_model
 Set model_name='$model_name' , places='$places'
 Where id_model='$key'";
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
//mysqli_query($link,'SET foreign_key_checks = 1');

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?>