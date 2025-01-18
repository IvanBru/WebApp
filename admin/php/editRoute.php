<?php
include('config.php');
$key=$_GET['key'];
$query = "SELECT *
 FROM routes
 Where id_route='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

Echo
 "
  <div class='table-responsive table-subject' id='table'>
        <table class='table  table-striped table-bordered'>
          <thead >
          <tr>
            <th>№</th>
			<th>Из города</th>
            <th>В город</th>
            <th>Растояние</th>
			<th>Время</th>
			<th>Цена</th>
			<th></th>
			<th></th>
          </tr>
        </thead>
		<tbody>
 ";
$myrow = mysqli_fetch_array($sql);
echo"<tr>
   <td></td>
   <td><input form='updateRoute' value='",$myrow['start'],"' name='start' type='text' maxlength='30' placeholder='Из города'></td>
   <td><input form='updateRoute' value='",$myrow['destination'],"' name='destination' type='text' maxlength='30' placeholder='В город'></td>
   <td><input form='updateRoute' value='",$myrow['distance'],"' name='distance' type='number' placeholder='Растояние' ></td>
   <td><input form='updateRoute' value='",$myrow['duration'],"' name='duration' type='time' ></td>
   <td><input form='updateRoute' value='",$myrow['price'],"' name='price' type='number' placeholder='Цена' ></td>
   <td><button type='submite' form='updateRoute' class='btn btn-primary orderTicket' name='keyUpdate' value=",$key,"  > Сохранить </button></td>
   <td></td>
  </tr>";
echo"</tbody>
        </table>
      </div>";

?> 