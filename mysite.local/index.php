<?php
require 'ink/lib.inc.php';
set_error_handler("myError");
require 'ink/data.inc.php';

// Инициализация заголовков страницы
$title = 'Сайт нашей школы';
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id']))); switch($id){
case 'about':
$title = 'О сайте'; $header = 'О нашем сайте'; break;
    case 'contact':
      $title = 'Контакты';
      $header = 'Обратная связь';
      break;
    case 'table':
      $title = 'Таблица умножения';
      $header = 'Таблица умножения';
      break;
    case 'calc':
      $title = 'Он-лайн калькулятор';
      $header = 'Калькулятор';
      break;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

<div id="header">
    <!-- Верхняя часть страницы -->
    <?php
    require('ink/top.inc.php');
    ?>
    <!-- Верхняя часть страницы -->
</div>

<div id="content">
    <!-- Заголовок -->
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
   switch($id){
     case 'about':
       include 'about.php';
       break;
     case 'contact':
       include 'contact.php';
       break;
     case 'table':
       include 'table.php';
       break;
     case 'calc':
       include 'calc.php';
       break;
     default:
       include 'ink/index.inc.php';
} 
?>
    <!-- Область основного контента -->
</div>

<div id="nav">
    <?php
    require('ink/menu.inc.php');
    ?>
</div>
  
<div id="footer">
    <?php
    require('ink/bottom.inc.php');
    ?>
</div>

</body>

</html>