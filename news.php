<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/new.css">
    <title>MyWebSite</title>
    
  </head>
  <body class="bg-light">
      <header class="header">
    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color: #151414" id="nav" >
      <div class="container-fluid">
        <a href="index.html" class="navbar-brand logo"><img src="img/logo2.png" width="20%" height="20%">ForeyBus</a>
        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navMenu">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse row" id="navMenu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a href="index.html" class="nav-link ">Главная</a>
            </li>
            <li class="nav-item active">
              <a href="news.php" class="nav-link">Новости</a>
            </li>
            <li class="nav-item ">
              <a href="ticket.html" class="nav-link">Билеты</a>
            </li>
            <li class="nav-item ">
              <a href="rent.html" class="nav-link">Аренда</a>
            </li>
            <li class="nav-item ">
              <a href="aboutUs.html" class="nav-link">О нас</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">Контакты</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>

    <main class="main container-fluid " id="main">
      <hr>
      <h1>Новости</h1>
      <hr>
      <?php
      include('config.php');

      $query="SELECT id_news FROM news";
      $rows = mysqli_query($link,$query);
      $rowsAll=$rows->num_rows;

      //printf("В выборке %d рядов.\n", $rowsAll);


      $page=isset($_GET['page']) ? $_GET['page']: 1;
      $limit=3;
      $offset=$limit*($page-1);
      $pageMax=ceil($rowsAll/$limit);
      $prev=0;
      $next=0;
      if($page<$pageMax)
        {$next=$page+1;}
      else{
       $next=$pageMax;} 
      if($page>1)
        {$prev=$page-1;} 
          else{ $prev=1;} 
      
      
      $query="Select * From news ORDER BY news_datetime DESC LIMIT $limit OFFSET $offset ";
      $sql = mysqli_query($link,$query) or die (mysqli_error($link));?>


      <nav aria-label="...">
  <ul class="pagination light">
      <a class="page-link active" href="news.php?page=1">Первая<a>
        <a class="page-link active" href="news.php?page=<?= $prev?>">Предыдущая<a>
      <a class="page-link" href="news.php?page=<?= $next ?>">Следующая</a>
      <a class="page-link" href="news.php?page=<?= $pageMax ?>">Последняя</a>
    
  </ul>
</nav>
      <?php foreach ($sql as $post) : ?>
        <div class="row">
          <div class="col-md-9">
                <h3><?=$post['news_name']?></h3>
                <p class="newstext"><?=mb_substr($post['news_text'],0,500,'utf-8').'...'?></p>
                <a href="openNews.php?id_news=<?=$post['id_news']?>">
                <button type='button' style="width:20% min-width: 200px;" class='btn btn-dark ' > Открыть новость </button>
              </a>
                <div>
            <span class="badge">Выложено <?=$post['news_datetime']?></span>
          </div>
        </div>
      </div>
    <?php endforeach;?>
    <nav aria-label="...">
  <ul class="pagination light">
      <a class="page-link active" href="news.php?page=1">Первая<a>
        <a class="page-link active" href="news.php?page=<?= $prev?>">Предыдущая<a>
      <a class="page-link" href="news.php?page=<?= $next ?>">Следующая</a>
      <a class="page-link" href="news.php?page=<?= $pageMax ?>">Последняя</a>
    
  </ul>
      <hr>
    </main>
    <hr>
    <footer class="section footer-classic context-dark bg-image" style="background: #151414;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p>Наша компания «ForeyBus» оказывает услуги по пассажирским перевозкам уже долгие годы, обладает положительными отзывами. Основные принципы работы – качество, безопасность, надежность и добросовестная работа.</p>
                <p class="rights"><span>©  </span><span class="copyright-year">2020</span><span> </span><span></span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Контакты</h5>
              <dl class="contact-list">
                <dt>Адрес:</dt>
                <dd>Харьков, ул.Черниговская 5</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">foreybus@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>Телефоны:</dt>
                <dd><a href="tel:#">066-63-423-23</a> <span>;</span> <a href="tel:#">050-23-234-23</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Меню</h5>
              <ul class="nav-list">
                <li><a href="index.html">Главная</a></li>
                <li><a href="news.php">Новости</a></li>
                <li><a href="ticket.html">Билеты</a></li>
                <li><a href="rent.html">Аренда</a></li>
                <li><a href="aboutUs.html">О нас</a></li>
                <li><a href="contact.html">Контакты</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>

        $(function(){

            $('.orderTicket').click(function(){

                $('input[name="sheet"]').val($(this).val());

            });

        });

        function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

    </script>

  </body>
  

</html>