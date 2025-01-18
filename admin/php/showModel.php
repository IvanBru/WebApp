<?php
include('config.php');
$query = "SELECT *
 FROM car_model"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
$number=1;

Echo
 "
 <div class='table-responsive table-subject' id='table'>
        <table class='table  table-striped table-bordered'>
          <thead >
          <tr>
            <th>№</th>
			<th>Название модели</th>
            <th>Количество мест</th>
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
 echo "<TD>",$myrow['model_name'],"</TD>";
 echo "<TD>",$myrow['places'],"</TD>";
 $key = $myrow['id_model'];
 echo "<TD><button type='button' class='btn btn-primary orderTicket' value='$key' onclick=editModel('php/editModel.php?',$key)> Редактировать </button></TD>";
 echo "<TD><form action='php/deleteModel.php' method='post' id='modelDel'><button type='submite' form='modelDel' name='key_model' class='btn btn-primary orderTicket' value='$key' > Удалить </button></form></TD>";
 echo "</TR>";
 $number+=1;
}
echo"
  <tr>
   <td></td>
   <td><input form='modelNew' name='model_name' type='text' maxlength='30' placeholder='Название модели'></td>
   <td><input form='modelNew' name='places' type='number' placeholder='Количество мест' ></td>
   <td><button type='submite' form='modelNew' class='btn btn-primary orderTicket'   > Добавить </button></td>
   <td></td>
  </tr>";
echo"</tbody>
        </table>
      </div>";

?> 