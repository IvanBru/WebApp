<?php
include('config.php');
if(!empty($_POST['key_bus'])){
$key=$_POST['key_bus'];

$query = "Delete from buses 
Where buses.id_bus='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 