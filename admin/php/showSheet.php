<?php
include('config.php');
$query = "SELECT *
 FROM routes,route_sheet,buses,car_model,personal_data
 Where route_sheet.id_rou=routes.id_route && route_sheet.bus=buses.id_bus && buses.model=car_model.id_model && route_sheet.driver=personal_data.id_worker"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
$number=1;

Echo
 "
 <div class='table-responsive table-subject' id='table'>
        <table class='table  table-striped table-bordered'>
          <thead >
          <tr>
            <th>№</th>
			<th>Из города</th>
            <th>В город</th>
			<th>Отправление</th>
            <th>Растояние (км)</th>
			<th>Время</th>
			<th>Продано мест</th>
			<th>Свободных мест</th>
			<th>Цена</th>
			<th>Водитель</th>
			<th>Модель автобуса</th>
			<th>Номер автобуса</th>
			<th></th>
			<th></th>
          </tr>
        </thead>
		<tbody>
 ";

WHILE ($myrow = mysqli_fetch_array($sql))
{
 $freePlace=$myrow['places']-$myrow['sold_space'];

 echo "<TR>";
 echo "<TD>",$number,"</TD>";
 echo "<TD>",$myrow['start'],"</TD>";
 echo "<TD>",$myrow['destination'],"</TD>";
 echo "<TD>",$myrow['dateTime'],"</TD>";
 echo "<TD>",$myrow['distance'],"</TD>";
 echo "<TD>",$myrow['duration'],"</TD>";
 echo "<TD>",$myrow['sold_space'],"</TD>";
 echo "<TD>",$freePlace,"</TD>";
 echo "<TD>",$myrow['price'],"</TD>";
 echo "<TD>",$myrow['worker_name'],"</TD>";
 echo "<TD>",$myrow['model_name'],"</TD>";
 echo "<TD>",$myrow['car_number'],"</TD>";
 $key = $myrow['id_sheet'];
 echo "<TD><button type='button' class='btn btn-primary orderTicket' value='$key' onclick=editSheet('php/editSheet.php?',$key)> Редактировать </button></TD>";
 echo "<TD><form action='php/deleteSheet.php' method='post' id='sheetDel'><button type='submite' form='sheetDel' name='key_sheet' class='btn btn-primary orderTicket' value='$key' > Удалить </button></form></TD>";
 echo "</TR>";
 $number+=1;
}


  $sqlModel = "SELECT * FROM routes";
  $result_select = mysqli_query($link, $sqlModel);
   echo"
  <tr>
  <td></td>";
   echo "<td><select name = 'id_rou' >";
  	echo "<option value=''>Выберите маршрут</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = '$object->id_route' > ''$object->start'-'$object->destination'' </option>";}
  echo "</select></td>
  <td></td>
   <td><input  name='dateTime' type='datetime-local'></td>
   <td></td>
   <td></td>
   <td><input  name='sold_space' type='number' placeholder='Продано мест'></td>
   <td></td>
   <td></td>";
   $sqlModel = "SELECT * FROM personal_data Where post=1";
  $result_select = mysqli_query($link, $sqlModel);
	echo "<td><select  name = 'driver' >";
  	echo "<option value=''>Выберите водителя</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = '$object->id_worker' > $object->worker_name </option>";}
  	echo "</select></td>";
	
	  $sqlModel = "SELECT * FROM buses,car_model Where buses.model=car_model.id_model";
  $result_select = mysqli_query($link, $sqlModel);
  	
	echo "<td><select  name = 'bus' >";
  	echo "<option value=''>Выберите автобус</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = '$object->id_bus' > ''$object->model_name'-'$object->car_number'' </option>";}
  	echo "</select></td>
	<td></td>
   <td><button type='submite'  class='btn btn-primary orderTicket'   > Добавить </button></td>
   <td></td>
  </tr>";
echo"</tbody>
        </table>
      </div>";

?> 