<?php
include('config.php');
$key=$_GET['key'];
$query = "SELECT *
 FROM personal_data,posts
 Where personal_data.post=posts.id_post && personal_data.id_worker='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

Echo
 "
 <div class='table-responsive table-subject' id='table'>
        <table class='table  table-striped table-bordered'>
          <thead >
          <tr>
			<th>Имя</th>
            <th>Пост</th>
            <th>Нанят</th>
			<th>День рождения</th>
			<th>Адрес</th>
			<th>Домашний телефон</th>
			<th>Рабочий телефон</th>
			<th></th>
          </tr>
        </thead>
		<tbody>
 ";


WHILE ($myrow = mysqli_fetch_array($sql))
{
 echo"
  <tr>
   <td><input form='updatePersonal' name='workerName' type='text' value='",$myrow['worker_name'],"' ></td>";
  $sqlModel = "SELECT * FROM posts";
  $result_select = mysqli_query($link, $sqlModel);
   echo "<td><select form='updatePersonal' name = 'postName' >";
  	echo "<option value=",$myrow['id_post'],">",$myrow['post_name'],"</option>";
  		while($object = mysqli_fetch_object($result_select)){
  echo "<option value = ",$object->id_post," >", $object->post_name," </option>";}
  	echo "</select></td>";
   
   
echo"
	<td><input form='updatePersonal' value=",$myrow['post_date']," name='dateHire' type='date'  ></td>
   <td><input form='updatePersonal' value=",$myrow['dob']," name='dob' type='date' ></td>
   <td><input form='updatePersonal' value='",$myrow['address'],"' name='address' type='text' ></td>
   <td><input form='updatePersonal' value=",$myrow['home_phone']," name='homePhone' type='text' ></td>
   <td><input form='updatePersonal' value=",$myrow['work_phone']," name='workPhone' type='text' ></td>
   <td><button type='submite' form='updatePersonal' class='btn btn-primary orderTicket' name='keyUpdate' value=",$key,"  > Сохранить </button></td>
   <td></td>
  </tr>";
}

echo"</tbody>
        </table>
      </div>";

?> 