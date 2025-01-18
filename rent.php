<?php
include('config.php');
include('rent.html');
if(!empty($_POST['name']) && !empty($_POST['phoneNum']) && !empty($_POST['mail']) && !empty($_POST['date'])){
$name=$_POST['name'];
$phoneNum=$_POST['phoneNum'];
$mail=$_POST['mail'];
$date=$_POST['date'];
$comment=$_POST['comment'];
if(empty($comment)){
$query = "INSERT query_rent(rent_name, rent_phone, rent_mail,rent_date) 
VALUES ('$name', '$phoneNum', '$mail', '$date');"; 
}
else{
$query = "INSERT query_rent(rent_name, rent_phone, rent_mail,rent_date,rent_comment) 
VALUES ('$name', '$phoneNum', '$mail', '$date', '$comment');"; 
}
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
?> 