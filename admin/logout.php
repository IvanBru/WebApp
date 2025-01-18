<?php
header('WWW-Authenticate: Basic realm="Авторизация"'); 
header('HTTP/1.0 401 Unauthorized'); 
?>