<?php
include('config.php');
$key=$_GET['key'];
$query = "SELECT *
 FROM news
 Where id_news='$key'"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));

Echo
 "
 <div class='table-responsive table-subject' id='table'>
        <table class='table  table-striped table-bordered'>
          <thead >
          <tr>
			<th >Заголовок</th>
            <th class='col-9'>Текст</th>
			<th>Дата</th>
			<th></th>
          </tr>
        </thead>
		<tbody>
 ";
$myrow = mysqli_fetch_array($sql);
echo" <tr>
   <td><input form='updateNews' value='",$myrow['news_name'],"' name='news_name' type='text' maxlength='50' placeholder='Заголовок'></td>
   <td><textarea form='updateNews' value='' name='news_text' type='' style='width:90%; min-width='400px;'' cols='15' rows='10' maxlength='10000' placeholder='Текст' >",$myrow['news_text'],"</textarea></td>
   <td><input form='updateNews' value='",$myrow['news_datetime'],"' name='news_datetime' type='datetime-local' placeholder='' ></td>
   <td><button type='submite' form='updateNews' class='btn btn-primary orderTicket' name='keyUpdate' value=",$key,"  > Сохранить </button></td>
  </tr>";
echo"</tbody>
        </table>
      </div>";

?> 