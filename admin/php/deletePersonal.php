<?php
include('config.php');
if(!empty($_POST['key_personal'])){
$key=$_POST['key_personal'];

$query = "Delete from personal_data 
Where personal_data.id_worker='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 