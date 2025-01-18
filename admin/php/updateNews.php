<?php
include('config.php');
if(!empty($_POST['news_name']) && !empty($_POST['news_text']) && !empty($_POST['news_datetime'])){
echo"<script type='text/javascript'>alert('Круто!');</script>";
$news_name=$_POST['news_name'];
$news_text=$_POST['news_text'];
$news_datetime=$_POST['news_datetime'];
$key=$_POST['keyUpdate'];
//mysqli_query($link,'SET foreign_key_checks = 0');
$query="
Update news
 Set news_name='$news_name' , news_text='$news_text',news_datetime='$news_datetime'
 Where id_news='$key'";
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
//mysqli_query($link,'SET foreign_key_checks = 1');

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?>