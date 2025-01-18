<?php
include('config.php');
$key=$_GET['key'];
$query = "SELECT *
 FROM buses,car_model
 Where buses.model=car_model.id_model && buses.id_bus='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

Echo
 "
 <div class='table-responsive table-subject' id='table'>
        <table class='table  table-striped table-bordered'>
          <thead >
          <tr>
			<th>Бортовой номер</th>
            <th>Номер автобуса</th>
            <th>Модель</th>
			<th>Год выпуска</th>
			<th>Пробег</th>
			<th></th>
          </tr>
        </thead>
		<tbody>
 ";

WHILE ($myrow = mysqli_fetch_array($sql))
{
 echo "<TR>";
 echo "<TD><input type='text' name='sideNumber' form='updateBus' value=",$myrow['side_number'],"></TD>";
 echo "<TD><input type='text' name='carNumber' form='updateBus' value=",$myrow['car_number'],"></TD>";
 $sqlModel = "SELECT * FROM car_model";
  $result_select = mysqli_query($link, $sqlModel);
   echo "<td><select form='updateBus' name = 'modelName' >";
  	echo "<option value=",$myrow['model'],">",$myrow['model_name'],"</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = ",$object->id_model," > ",$object->model_name," </option>";}
  	echo "</select></td>";
 echo "<TD><input type='text' name='year' form='updateBus' value=",$myrow['year'],"></TD>";
 echo "<TD><input type='text' name='milage' form='updateBus' value=",$myrow['milage'],"></TD>";
 echo "<TD><button  type='submite' form='updateBus' class='btn btn-primary orderTicket' name='keyUpdate' value=",$key," > Сохранить </button></TD>";
 echo "</TR>";
}

echo"</tbody>
        </table>
      </div>";

?> 