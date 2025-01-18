<?php
include('config.php');
$query = "SELECT *
 FROM buses,car_model
 Where buses.model=car_model.id_model"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
$number=1;

Echo
 "
 <div class='table-responsive table-subject' id='table'>
        <table class='table  table-striped table-bordered'>
          <thead >
          <tr>
            <th>№</th>
			<th>Бортовой номер</th>
            <th>Номер автобуса</th>
            <th>Модель</th>
			<th>Мест</th>
			<th>Год выпуска</th>
			<th>Пробег</th>
			<th></th>
			<th></th>
          </tr>
        </thead>
		<tbody>
 ";

WHILE ($myrow = mysqli_fetch_array($sql))
{
 echo "<TR>";
 echo "<TD>",$number,"</TD>";
 echo "<TD>",$myrow['side_number'],"</TD>";
 echo "<TD>",$myrow['car_number'],"</TD>";
 echo "<TD>",$myrow['model_name'],"</TD>";
 echo "<TD>",$myrow['places'],"</TD>";
 echo "<TD>",$myrow['year'],"</TD>";
 echo "<TD>",$myrow['milage'],"</TD>";
 $key = $myrow['id_bus'];
 echo "<TD><button type='button' class='btn btn-primary orderTicket' value='$key' onclick=editBus('php/editBus.php?',$key)> Редактировать </button></TD>";
 echo "<TD><form action='php/busDelete.php' method='post' id='busDel'><button type='submite' form='busDel' name='key_bus' class='btn btn-primary orderTicket' value='$key' > Удалить </button></form></TD>";
 echo "</TR>";
 $number+=1;
}
echo"
  <tr>
   <td></td>
   <td><input form='busNew' name='sideNumber' type='number' min='1' max='999999' placeholder='Бортовой номер'></td>
   <td><input form='busNew' name='carNumber' type='text' maxlength='6' placeholder='Номер автобуса'></td>";
  $sqlModel = "SELECT * FROM car_model";
  $result_select = mysqli_query($link, $sqlModel);
   echo "<td><select form='busNew' name = 'model' >";
  	echo "<option value='0'>Выберите модель</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = '$object->id_model' > $object->model_name </option>";}
  	echo "</select></td>";
   
   
echo"
   <td></td>
   <td><input form='busNew' name='year' type='number' min='1900' max='2100' placeholder='Год'></td>
   <td><input form='busNew' name='milage' type='number'min='0' max='99999999' placeholder='Пробег'></td>
   <td><button type='submite' class='btn btn-primary orderTicket'   > Добавить </button></td>
   <td></td>
  </tr>";
echo"</tbody>
        </table>
      </div>";

?> 