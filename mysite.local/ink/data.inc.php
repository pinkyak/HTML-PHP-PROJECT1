<?php
    setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');
    $days = date('d');
    $monthes = date('F');
    $years = date('Y');
    $_monthsList = array(
      "1"=>"Январь","2"=>"Февраль","3"=>"Март",
      "4"=>"Апрель","5"=>"Май", "6"=>"Июнь",
      "7"=>"Июль","8"=>"Август","9"=>"Сентябрь",
      "10"=>"Октябрь","11"=>"Ноябрь","12"=>"Декабрь");
    $monthes = $_monthsList[date('n')];
    $hour = (int)date('H'); 
    $welcome = 'ДоброЇ ночі';
    if($hour>=6 and $hour<12):
        $welcome = "Добрго ранку";
      elseif($hour>=12 and $hour<18):
        $welcome = "Доброго дня";
      elseif($hour>=18 and $hour<23):
        $welcome = "Доброго вечора";
    endif;

    $leftMenu = [
      ["link"=>"Додому", "href"=>"index.php"],
      ["link"=>"Про нас", "href"=>"index.php?id=about"],
      ["link"=>"Контакти", "href"=>"index.php?id=contact"],
      ["link"=>"Таблиця множення", "index.php?id=table"],
      ["link"=>"Калькулятор", "href"=>"index.php?id=calc"],
    ];

?>