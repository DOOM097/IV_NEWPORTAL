<?php
// Вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' or $path == 'index' or $path == 'index.php') {
    $response = Controller::startSite();
} elseif ($path == 'all') {
    $response = Controller::allNews();
} elseif ($path == 'category' and isset($_GET['id'])) {
    $response = Controller::newsByCatID($_GET['id']);
} elseif ($path == 'news' and isset($_GET['id'])) {
    $response = Controller::newsByID($_GET['id']);
} elseif ($path == 'insertcomment' and isset($_GET['comment'], $_GET['id'])) {
    $response = Controller::insertComment($_GET['comment'], $_GET['id']);
}

// Error page
else {
    $response = Controller::error404();
}