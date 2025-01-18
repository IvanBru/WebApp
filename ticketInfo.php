<?php
include('config.php');

if(!empty($_GET['destination']) && !empty($_GET['date']) ){
//$city=$_POST['city'];
$city=$_GET['destination'];
$dateStart=$_GET['date'];
$query = "SELECT *
 FROM routes,route_sheet,buses,car_model
 Where '$city'=routes.destination && routes.id_route=route_sheet.id_rou && DATE('$dateStart')=DATE(route_sheet.dateTime ) && route_sheet.bus=buses.id_bus && buses.model=car_model.id_model"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

Echo
 "
 <div class='table-responsive table-subject' id='table'>
        <table class='table  table-striped table-bordered'>
          <thead >
          <tr>
            <th>Отправление</th>
			<th>Назначение</th>
            <th>Время отправления</th>
            <th>Время в пути</th>
			<th>Свободные места</th>
			<th>Цена(грн)</th>
			<th></th>
          </tr>
        </thead>
		<tbody>
 ";

WHILE ($myrow = mysqli_fetch_array($sql))
{
	$places=$myrow['places'];
	$sold=$myrow['sold_space'];
	$freeSpace=$places-$sold;
	

 echo "<TR>";
 echo "<TD>",$myrow['start'],"</TD>";
 echo "<TD>",$myrow['destination'],"</TD>";
 echo "<TD>",$myrow['dateTime'],"</TD>";
 echo "<TD>",$myrow['duration'],"</TD>";
 echo "<TD>",$freeSpace,"</TD>";
 echo "<TD>",$myrow['price'],"</TD>";
 $key = $myrow['id_rou'];
 if($freeSpace>=1){
 echo "<TD><button type='button' class='btn btn-primary orderTicket' value='$key' onclick='sendkey($key)' data-toggle='modal' data-target='#exampleModal'> Забронировать место </button></TD>"; 
 }
 else{
	echo"<TD>Свободных мест нет</TD>";
 }
 echo "</TR>";
}
echo"</tbody>
        </table>
      </div>";
}


else{
	echo"<script type='text/javascript'>alert('Вы не заполнили форму!');</script>";
}
?> 