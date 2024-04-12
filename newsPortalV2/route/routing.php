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
//register user

elseif ($path == "registerForm")
{ //form register
    $response =Controller::registerForm();
}
elseif ($path == "registerAnswer")
{
//register user
    $response = Controller::registerUser();
}

// Error page
else {
    $response = Controller::error404();
}