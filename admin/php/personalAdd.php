<?php
include('config.php');
if(!empty($_POST['workerName']) && !empty($_POST['postName']) && ($_POST['dateHire']) && !empty($_POST['dob']) && !empty($_POST['address']) && !empty($_POST['homePhone']) && !empty($_POST['workPhone'])){
$workerName=$_POST['workerName'];
$post_name=$_POST['postName'];
$post_date=$_POST['dateHire'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$homePhone=$_POST['homePhone'];
$workPhone=$_POST['workPhone'];

$query = "INSERT personal_data(worker_name, post, post_date,dob,address,home_phone,work_phone) 
VALUES ('$workerName', '$post_name', '$post_date', '$dob', '$address','$homePhone', '$workPhone')"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?> 