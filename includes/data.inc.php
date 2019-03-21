<?php
$day = strftime('%d');
$mon = strftime('%m');
$year = strftime('%Y');

$name = 'My name';

define('COPYRIGHT', "created by $name");

$hour = (int)strftime('%H');
$welcome = '';

if($hour > 0 and $hour < 6) {
    $welcome = 'Доброй ночи';
} elseif($hour >= 6 and $hour < 12) {
    $welcome = 'Доброе утро';
} elseif($hour >= 12 and $hour < 18) {
    $welcome = 'Добрый день';
} elseif($hour >= 18 and $hour < 23) {
    $welcome = 'Добрый вечер';
} else {
    $welcome = 'Доброй ночи';
}

$menu = array(
    array('link'=>'Главная', 'href'=>'index.php'),
    array('link'=>'О нас', 'href'=>'index.php?id=about'),
    array('link'=>'Контакты', 'href'=>'index.php?id=contact'),
    array('link'=>'Таблица умножения', 'href'=>'index.php?id=table'),
    array('link'=>'Калькулятор', 'href'=>'index.php?id=calc'),
    array('link'=>'Гостевая книга', 'href'=>'index.php?id=gbook'),
);

$title = 'Сайт нашей школы';
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id'])));

switch($id){
    case 'about':
        $title = 'О сайте';
        $header = "О нашем сайте";
        break;
    case 'contact':
        $title = 'Контакты';
        $header = "Обратная связь";
        break;
    case 'table':
        $title = 'Таблица умножения';
        $header = "Таблица умножения";
        break;
    case 'calc':
        $title = 'Онлайн калькулятор';
        $header = "Калькулятор";
        break;
    case 'gbook':
        $title = 'Гостевая книга';
        $header = "Гостевая книга";
        break;
}
?>