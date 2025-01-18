<?php
include('config.php');
if(!empty($_POST['key_model'])){
$key=$_POST['key_model'];

$query = "Delete from car_model 
Where id_model='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 