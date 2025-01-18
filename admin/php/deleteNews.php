<?php
include('config.php');
if(!empty($_POST['key_news'])){
$key=$_POST['key_news'];

$query = "Delete from news 
Where id_news='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 