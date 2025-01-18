<?php
include('config.php');
$query = "SELECT *
 FROM passangers,route_sheet,routes
 Where passangers.num_sheet=route_sheet.id_sheet && route_sheet.id_rou=routes.id_route"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
$number=1;

Echo
 "
 <div class='table-responsive table-subject' id='table'>
        <table class='table  table-striped table-bordered'>
          <thead >
          <tr>
            <th>№</th>
			<th>Имя</th>
            <th>Из города</th>
			<th>В город</th>
			<th>Дата</th>
			<th>Телефон</th>
			<th></th>
          </tr>
        </thead>
		<tbody>
 ";

WHILE ($myrow = mysqli_fetch_array($sql))
{

 echo "<TR>";
 echo "<TD>",$number,"</TD>";
 echo "<TD>",$myrow['passanger_name'],"</TD>";
 echo "<TD>",$myrow['start'],"</TD>";
 echo "<TD>",$myrow['destination'],"</TD>";
 echo "<TD>",$myrow['dateTime'],"</TD>";
 echo "<TD>",$myrow['passanger_phone'],"</TD>";
 $key = $myrow['id_passanger'];
 echo "<TD><form action='php/deletePassan.php' method='post' id='passanDel'><button type='submite' form='passanDel' name='key_passan' class='btn btn-primary orderTicket' value='$key' > Удалить </button></form></TD>";
 echo "</TR>";
 $number+=1;
}
echo"</tbody>
        </table>
      </div>";

?> 