<?php
include('config.php');
if(!empty($_POST['key_query'])){
$key=$_POST['key_query'];

$query = "Delete from query_rent
Where id_query='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 