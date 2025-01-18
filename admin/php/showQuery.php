<?php
include('config.php');
$query = "SELECT *
 FROM query_rent"; 
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
            <th>Номер телефона</th>
			<th>Почта</th>
			<th>Дата</th>
			<th>Комментарий</th>
			<th></th>
          </tr>
        </thead>
		<tbody>
 ";

WHILE ($myrow = mysqli_fetch_array($sql))
{

 echo "<TR>";
 echo "<TD>",$number,"</TD>";
 echo "<TD>",$myrow['rent_name'],"</TD>";
 echo "<TD>",$myrow['rent_phone'],"</TD>";
 echo "<TD>",$myrow['rent_mail'],"</TD>";
 echo "<TD>",$myrow['rent_date'],"</TD>";
 echo "<TD>",$myrow['rent_comment'],"</TD>";
 $key = $myrow['id_query'];
 echo "<TD><form action='php/deleteQuery.php' method='post' id='queryDel'><button type='submite' form='queryDel' name='key_query' class='btn btn-primary orderTicket' value='$key' > Удалить </button></form></TD>";
 echo "</TR>";
 $number+=1;
}
echo"</tbody>
        </table>
      </div>";

?> 