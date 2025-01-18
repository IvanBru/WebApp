<?php
include('config.php');
if(!empty($_POST['key_passan'])){
$key=$_POST['key_passan'];

$query = "Delete from passangers
Where id_passanger='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 