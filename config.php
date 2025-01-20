<?php
// Функция для загрузки переменных из .env файла
function loadEnv($filePath)
{
    if (!file_exists($filePath)) {
        exit("<p>Файл .env не найден!</p>");
    }

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Пропускаем строки с комментариями
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Разбиваем строку на ключ и значение
        [$key, $value] = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value);

        // Убираем кавычки, если они есть
        $value = trim($value, '"\'');
        
        // Сохраняем переменные в $_ENV
        $_ENV[$key] = $value;
    }
}

// Загружаем .env файл
loadEnv(__DIR__ . '/.env');

// Чтение переменных из $_ENV
$dblocation = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$dbuser = $_ENV['DB_USER'];
$dbpasswd = $_ENV['DB_PASSWORD'];
$dbport = $_ENV['DB_PORT'];

// Подключение к серверу MySQL
$link = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname, $dbport);

// Проверка подключения
if (!$link) {
    exit("<p>Не удалось подключиться к серверу базы данных. Ошибка: " . mysqli_connect_error() . "</p>");
}

// Установка кодировки
mysqli_set_charset($link, "utf8");

// Проверка успешного подключения к базе данных
if (!mysqli_select_db($link, $dbname)) {
    exit("<p>Не удалось подключиться к базе данных. Ошибка: " . mysqli_error($link) . "</p>");
}

// Дальнейшая работа с базой данных...
?>