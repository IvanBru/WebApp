<?php
include('config.php');
if(!empty($_POST['news_name']) && !empty($_POST['news_text']) && !empty($_POST['news_datetime'])){
$news_name=$_POST['news_name'];
$news_text=$_POST['news_text'];
$news_datetime=$_POST['news_datetime'];

$query = "INSERT news(news_name, news_text,news_datetime) 
VALUES ('$news_name', '$news_text', '$news_datetime')"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 