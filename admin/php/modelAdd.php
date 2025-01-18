<?php
include('config.php');
if(!empty($_POST['model_name']) && !empty($_POST['places'])){
$model_name=$_POST['model_name'];
$places=$_POST['places'];

$query = "INSERT car_model(model_name, places) 
VALUES ('$model_name', '$places')"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 