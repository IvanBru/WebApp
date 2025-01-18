<?php
include('config.php');
$key=$_GET['key'];
$query = "SELECT *
 FROM car_model
 Where id_model='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

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
$myrow = mysqli_fetch_array($sql);
echo" <tr>
   <td></td>
   <td><input form='updateModel' value='",$myrow['model_name'],"' name='model_name' type='text' maxlength='30' placeholder='Название модели'></td>
   <td><input form='updateModel' value='",$myrow['places'],"' name='places' type='number' placeholder='Количество мест' ></td>
   <td><button type='submite' form='updateModel' class='btn btn-primary orderTicket' name='keyUpdate' value=",$key,"  > Сохранить </button></td>
   <td></td>
  </tr>";
echo"</tbody>
        </table>
      </div>";

?> 