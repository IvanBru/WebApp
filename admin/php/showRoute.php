<?php
include('config.php');
$query = "SELECT *
 FROM routes"; 
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
            <th>Растояние</th>
			<th>Время</th>
			<th>Цена</th>
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
 echo "<TD>",$myrow['start'],"</TD>";
 echo "<TD>",$myrow['destination'],"</TD>";
 echo "<TD>",$myrow['distance'],"</TD>";
 echo "<TD>",$myrow['duration'],"</TD>";
 echo "<TD>",$myrow['price'],"</TD>";
 $key = $myrow['id_route'];
 echo "<TD><button type='button' class='btn btn-primary orderTicket' value='$key' onclick=editRoute('php/editRoute.php?',$key)> Редактировать </button></TD>";
 echo "<TD><form action='php/deleteRoute.php' method='post' id='routeDel'><button type='submite' form='routeDel' name='key_route' class='btn btn-primary orderTicket' value='$key' > Удалить </button></form></TD>";
 echo "</TR>";
 $number+=1;
}
echo"
  <tr>
   <td></td>
   <td><input form='routeNew' name='start' type='text' maxlength='30' placeholder='Из города'></td>
   <td><input form='routeNew' name='destination' type='text' maxlength='30' placeholder='В город'></td>
   <td><input form='routeNew' name='distance' type='number' placeholder='Растояние' ></td>
   <td><input form='routeNew' name='duration' type='time' ></td>
   <td><input form='routeNew' name='price' type='number' placeholder='Цена' ></td>
   <td><button type='submite' form='routeNew' class='btn btn-primary orderTicket'   > Добавить </button></td>
   <td></td>
  </tr>";
echo"</tbody>
        </table>
      </div>";

?> 