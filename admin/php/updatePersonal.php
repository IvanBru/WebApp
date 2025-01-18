<?php
include('config.php');
if(!empty($_POST['workerName']) && !empty($_POST['postName']) && ($_POST['dateHire']) && !empty($_POST['dob']) && !empty($_POST['address']) && !empty($_POST['homePhone']) && !empty($_POST['workPhone'])){
echo"<script type='text/javascript'>alert('Круто!');</script>";
$workerName=$_POST['workerName'];
$postName=$_POST['postName'];
$dateHire=$_POST['dateHire'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$homePhone=$_POST['homePhone'];
$workPhone=$_POST['workPhone'];
$key=$_POST['keyUpdate'];
//mysqli_query($link,'SET foreign_key_checks = 0');
$query="
Update personal_data
 Set worker_name='$workerName' , post='$postName',post_date='$dateHire',dob='$dob',address='$address',home_phone='$homePhone',work_phone='$workPhone'
 Where personal_data.id_worker='$key'";
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
//mysqli_query($link,'SET foreign_key_checks = 1');

}
else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
header('Location: ../index.php');
?>