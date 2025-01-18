<?php
include('config.php');
$key=$_GET['key'];
$query = "SELECT *
 FROM routes,route_sheet,buses,car_model,personal_data
 Where route_sheet.id_rou=routes.id_route && route_sheet.bus=buses.id_bus && buses.model=car_model.id_model && route_sheet.driver=personal_data.id_worker && route_sheet.id_sheet='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

Echo
 "
 <div class='table-responsive table-subject' id='table'>
        <table class='table  table-striped table-bordered'>
          <thead >
          <tr>
			<th>Маршрут</th>
            <th>Отправление</th>
            <th>Продано мест</th>
			<th>Водитель</th>
			<th>Модель автобуса</th>
          </tr>
        </thead>
		<tbody>
 ";
$myrow = mysqli_fetch_array($sql);

$sqlModel = "SELECT * FROM routes";
  $result_select = mysqli_query($link, $sqlModel);
   echo"
  <tr>";
   echo "<td><select name = 'id_rou' >";
  	echo "<option value='",$myrow['id_rou'],"'>",$myrow['start'],"-",$myrow['destination'],"</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = '$object->id_route' > ''$object->start'-'$object->destination'' </option>";}
  echo "</select></td>
   <td><input  name='dateTime' value='",$myrow['dateTime'],"' type='datetime-local'></td>
   <td><input  name='sold_space' value='",$myrow['sold_space'],"' type='number' placeholder='Продано мест'></td>";
   $sqlModel = "SELECT * FROM personal_data Where post=1";
  $result_select = mysqli_query($link, $sqlModel);
	echo "<td><select  name = 'driver'  >";
  	echo "<option value='",$myrow['driver'],"'>",$myrow['worker_name'],"</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = '$object->id_worker' > $object->worker_name </option>";}
  	echo "</select></td>";
	
	  $sqlModel = "SELECT * FROM buses,car_model Where buses.model=car_model.id_model";
  $result_select = mysqli_query($link, $sqlModel);
  	
	echo "<td><select  name = 'bus' >";
  	echo "<option value='",$myrow['bus'],"'>",$myrow['model_name'],"-",$myrow['car_number'],"</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = '$object->id_bus' > ''$object->model_name'-'$object->car_number'' </option>";}
  	echo "</select></td>
   <td><button type='submite'  class='btn btn-primary orderTicket' name='keyUpdate' value=",$key,"  > Сохранить </button></td>
  </tr>";
echo"</tbody>
        </table>
      </div>";

?> 