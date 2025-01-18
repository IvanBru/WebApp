<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/new.css">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="fun.js"></script>
    <script>
      function editBus(link,key) {  
    var data="key="+key;
        var cont = document.getElementById('showUpdateBus');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('get', link+data);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }

    function editPersonal(link,key) {  
    var data="key="+key;
        var cont = document.getElementById('showUpdatePersonal');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('get', link+data);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
    function editSheet(link,key) {  
    var data="key="+key;
        var cont = document.getElementById('showUpdateSheet');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('get', link+data);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
    function editRoute(link,key) {  
    var data="key="+key;
        var cont = document.getElementById('showUpdateRoute');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('get', link+data);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
    function editModel(link,key) {  
    var data="key="+key;
        var cont = document.getElementById('showUpdateModel');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('get', link+data);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
    function editNews(link,key) {  
    var data="key="+key;
        var cont = document.getElementById('showUpdateNews');    
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('get', link+data);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }
    </script>

    <title>MyWebSite</title>
  </head>
  <body>
    
      <header class="header">
    <nav class="navbar navbar-expand-lg  navbar-dark" style="background-color: #151414" id="nav" >
      <div class="container-fluid">
        <a href="../index.html" class="navbar-brand logo"><img src="../img/logo2.png" width="20%" height="20%">ForeyBus</a>
        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navMenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a href="../index.html" class="nav-link ">Главная</a>
            </li>
            <li class="nav-item">
              <a href="../news.php" class="nav-link">Новости</a>
            </li>
            <li class="nav-item ">
              <a href="../ticket.html" class="nav-link">Билеты</a>
            </li>
            <li class="nav-item">
              <a href="../rent.html" class="nav-link">Аренда</a>
            </li>
            <li class="nav-item">
              <a href="../aboutUs.html" class="nav-link">О нас</a>
            </li>
            <li class="nav-item ">
              <a href="contact.html" class="nav-link">Контакты</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">Выйти</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
    <main class="main container-fluid text-center" id="main">

      <hr>
      <div style="text-align: center;">
        <h1><b>АДМИН ПАНЕЛЬ</b></h1>
      </div>
      <hr>
        <section>
        <h2><b>Модели автобусов</b></h2>
        <div>
        <form>
        <input onclick="showModel('php/showModel.php')" type="button" value="Открыть" class="btn btn-dark wrn-btn" style="width:30%;">
        </form>
        <form action="php/modelAdd.php" method="post" id="modelNew">
        <div id="showModel"></div>
        </div>
        </form>
        <form action="php/updateModel.php" method="post" id="updateModel">
          <div id="showUpdateModel"></div>
        </form>
      </section>

    <hr>
        <section>
        <h2><b>Автобусы</b></h2>
        <div>
        <form>
        <input onclick="showBus('php/showBus.php')" type="button" value="Открыть" class="btn btn-dark wrn-btn" style="width:30%;">
        </form>
      
        <form id='busNew' action='php/busAdd.php' method='POST'>
        <div id="showBus"></div>

        </div>
        </form>
        <form action="php/updateBus.php" method="post" id="updateBus">
          <div id="showUpdateBus"></div>
        </form>

      </section>
      <hr>
      <section>
        <h2><b>Работники</b></h2>
        <div>
        <form>
        <input onclick="showPersonal('php/showPersonal.php')" type="button" value="Открыть" class="btn btn-dark wrn-btn" style="width:30%;">
        </form>
        
        <form action="php/personalAdd.php" method="post" id="personalNew">
        <div id="showPersonal"></div>

        </div>
        </form>
        <form action="php/updatePersonal.php" method="post" id="updatePersonal">
          <div id="showUpdatePersonal"></div>
      </form>
      </section>
      <hr>
      <section>
        <h2><b>Маршрутные листы</b></h2>
        <div>
        <form>
        <input onclick="showSheet('php/showSheet.php')" type="button" value="Открыть" class="btn btn-dark wrn-btn" style="width:30%;">
        </form>
        <form action="php/sheetAdd.php" method="post" id="sheetNew">
        <div id="showSheet"></div>
        </div>
        </form>
        <form action="php/updateSheet.php" method="post" id="updateSheet">
          <div id="showUpdateSheet"></div>
        </form>

      </section>
      <hr>
      <section>
        <h2><b>Маршруты</b></h2>
        <div>
        <form>
        <input onclick="showRoute('php/showRoute.php')" type="button" value="Открыть" class="btn btn-dark wrn-btn" style="width:30%;">
        </form>
        <form action="php/routeAdd.php" method="post" id="routeNew">
        <div id="showRoute"></div>
        </div>
        </form>
        <form action="php/updateRoute.php" method="post" id="updateRoute">
          <div id="showUpdateRoute"></div>
        </form>
      </section>
      <hr>
      <section>
        <h2><b>Запросы на аренду</b></h2>
        <div>
        <form>
        <input onclick="showQuery('php/showQuery.php')" type="button" value="Открыть" class="btn btn-dark wrn-btn" style="width:30%;">
        </form>
        <div id="showQuery"></div>
        </div>
      </section>
      <hr>
      <section>
        <h2><b>Все пассажиры</b></h2>
        <div>
        <form>
        <input onclick="showPassan('php/showPassan.php')" type="button" value="Открыть" class="btn btn-dark wrn-btn" style="width:30%;">
        </form>
        <div id="showPassan"></div>
        </div>
      </section>
        <hr>
        <section>
        <h2><b>Новости</b></h2>
        <div>
        <form>
        <input onclick="showNews('php/showNews.php')" type="button" value="Открыть" class="btn btn-dark wrn-btn" style="width:30%;">
        </form>
        <form action="php/newsAdd.php" method="post" id="newsNew">
        <div id="showNews"></div>
        </div>
        </form>
        <form action="php/updateNews.php" method="post" id="updateNews">
          <div id="showUpdateNews"></div>
        </form>
      </section>
    <hr>
    </main>
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
                <li><a href="../index.html">Главная</a></li>
                <li><a href="../news.php">Новости</a></li>
                <li><a href="../ticket.html">Билеты</a></li>
                <li><a href="../rent.html">Аренда</a></li>
                <li><a href="../aboutUs.html">О нас</a></li>
                <li><a href="../contact.html">Контакты</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script>
      
    </script>
    <script src="../js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>