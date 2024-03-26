<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' or $path == 'index.php') {
    // Главная страница -
    $response = ControllerAdmin::formLoginSite();
}
// ---- ВХОД ----
elseif ($path == 'login') {
    // Форма входа
    $response = ControllerAdmin::loginAction();
} elseif ($path == 'logout') {
    // Выход
    $response = ControllerAdmin::logoutAction();
}
// listNews
elseif ($path == 'newsAdmin') {
    $response = ControllerAdminNews::newsList();
}
// add news
elseif ($path == 'newsAdd') {
    $response = ControllerAdminNews::newsAddForm();
} elseif ($path == 'newsAddResult') {
    $response = ControllerAdminNews::newsAddResult();
}
// edit news
elseif ($path == 'newsEdit' && isset($_GET['id'])) {
    $response = ControllerAdminNews::newsEditForm($_GET['id']);
} elseif ($path == 'newsEditResult' && isset($_GET['id'])) {
    $response = ControllerAdminNews::newsEditResult($_GET['id']);
}
// delete news
elseif ($path == 'newsDel' && isset($_GET['id'])) {
    $response = ControllerAdminNews::newsDeleteForm($_GET['id']);
} elseif ($path == 'newsDelResult' && isset($_GET['id'])) {
    $response = ControllerAdminNews::newsDeleteResult($_GET['id']);
}
// Страница не существует
else {
    $response = ControllerAdmin::error404();
}
