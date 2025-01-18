<?php
//Адрес сервера MySQL
$dblocation="localhost";
$dbname="car_company";
$dbuser="root";
$dbpasswd="";
$link=mysqli_connect($dblocation, $dbuser, $dbpasswd);
if(!$link) {
exit("<p>В настоящий момент сервер базы данных недоступен, поэтому корректное отображение страницы невозможно.</p>");
}
else
if(!mysqli_select_db($link,$dbname))
{
exit("<p>В настоящий момент база данных недоступна, поэтому корректное отображение страницы невозможно.</p>");
}
mysqli_query($link,"set names 'utf8'");
?> 