<?php
include('config.php');
$query = "SELECT *
 FROM personal_data,posts
 Where personal_data.post=posts.id_post"; 
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
            <th>Пост</th>
            <th>Нанят</th>
			<th>День рождения</th>
			<th>Адрес</th>
			<th>Домашний телефон</th>
			<th>Рабочий телефон</th>
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
 echo "<TD>",$myrow['worker_name'],"</TD>";
 echo "<TD>",$myrow['post_name'],"</TD>";
 echo "<TD>",$myrow['post_date'],"</TD>";
 echo "<TD>",$myrow['dob'],"</TD>";
 echo "<TD>",$myrow['address'],"</TD>";
 echo "<TD>",$myrow['home_phone'],"</TD>";
 echo "<TD>",$myrow['work_phone'],"</TD>";
 $key = $myrow['id_worker'];
 echo "<TD><button type='button' class='btn btn-primary orderTicket' value='$key' onclick=editPersonal('php/editPersonal.php?',$key)> Редактировать </button></TD>";
 echo "<TD><form action='php/deletePersonal.php' method='post' id='personalDel'><button type='submite' form='personalDel' name='key_personal' class='btn btn-primary orderTicket' value='$key' > Удалить </button></form></TD>";
 echo "</TR>";
 $number+=1;
}
echo"
  <tr>
   <td></td>
   <td><input form='personalNew' name='workerName' type='text' maxlength='30' placeholder='Имя'></td>";
  $sqlModel = "SELECT * FROM posts";
  $result_select = mysqli_query($link, $sqlModel);
   echo "<td><select form='personalNew' name = 'postName' >";
  	echo "<option value='0'>Выберите пост</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = '$object->id_post' > $object->post_name </option>";}
  	echo "</select></td>";
   
   
echo"
	<td><input form='personalNew' name='dateHire' type='date'  ></td>
   <td><input form='personalNew' name='dob' type='date' placeholder='День рождения'></td>
   <td><input form='personalNew' name='address' type='text' maxlength='30' placeholder='Адрес'></td>
   <td><input form='personalNew' name='homePhone' type='text'  placeholder='Домашний телефон'></td>
   <td><input form='personalNew' name='workPhone' type='text'  placeholder='Рабочий телефон'></td>
   <td><button type='submite' form='personalNew' class='btn btn-primary orderTicket'   > Добавить </button></td>
   <td></td>
  </tr>";
echo"</tbody>
        </table>
      </div>";

?> 