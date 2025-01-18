<?php
include('config.php');
$query = "SELECT *
 FROM news"; 
$sql = mysqli_query($link,$query) or die (mysqli_error($link));
$number=1;

Echo
 "
 <div class='table-responsive table-subject' id='table'>
        <table class='table  table-striped table-bordered'>
          <thead >
          <tr>
            <th>№</th>
			<th>Заголовок</th>
            <th>Дата</th>
			<th>Текст</th>
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
 echo "<TD>",$myrow['news_name'],"</TD>";
 echo "<TD>", mb_substr($myrow['news_text'],0,300,'utf-8').'...',"</TD>";
 echo "<TD>",$myrow['news_datetime'],"</TD>";
 $key = $myrow['id_news'];
 echo "<TD><button type='button' class='btn btn-primary orderTicket' value='$key' onclick=editNews('php/editNews.php?',$key)> Редактировать </button></TD>";
 echo "<TD><form action='php/deleteNews.php' method='post' id='newsDel'><button type='submite' form='newsDel' name='key_news' class='btn btn-primary orderTicket' value='$key' > Удалить </button></form></TD>"; echo "</TR>";
 $number+=1;
}
echo"
  <tr>
   <td></td>
   <td><input form='newsNew'  name='news_name' type='text' maxlength='50' placeholder='Заголовок'></td>
   <td><textarea form='newsNew'  name='news_text' type='' style='width:90%; min-width='400px;'' cols='15' rows='10' maxlength='10000' placeholder='Текст' ></textarea></td>
   <td><input form='newsNew'  name='news_datetime' type='datetime-local' placeholder='' ></td>
   <td><button type='submite' form='newsNew' class='btn btn-primary orderTicket'   > Добавить </button></td>
   <td></td>
  </tr>";
echo"</tbody>
        </table>
      </div>";


?> 