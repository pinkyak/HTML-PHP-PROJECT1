<?php
function drawTable($cols=10, $rows=10, $color="pink"){
  echo "<table border = '1'>";
      for($i=1; $i <= $rows; $i++):
      echo "<tr>";
       for($q=1; $q <= $cols; $q++):
        if($i==1 or $q==1)
        echo "<th style='background:$color'>". $i*$q ."</th>";
        else
        echo "<td>". $i*$q ."</td>";
       endfor;
      echo "</tr>";
      endfor;
      echo "</table>";
}
function myError($no, $msg, $file, $line){
  if ($no == E_USER_ERROR){
    echo "Так не должно быть";
    $s = date("d-m-Y H:m:s") . " - $msg в $file:$line";
    error_log("$s\n", 3 , "eror.log");
  }
}
function drawMenu($menu, $vertical=true){
    if(!is_array($menu))
      return false;
    $style = "";
    if (!$vertical)
    $style = " style='display:inline;margin-right:15px'";
    echo "<ul>";
    foreach($menu as &$item):
      echo "<li$style>";
        echo "<a href={$item["href"]}>{$item["link"]}</a></a>";
      echo"</li>";
    endforeach;
  echo "</ul>";
  return true;
  }

  $leftMenu = [
    ["link"=>"Додому", "href"=>"index.php"],
    ["link"=>"Про нас", "href"=>"about.php"],
    ["link"=>"Контакти", "href"=>"contact.php"],
    ["link"=>"Таблиця множення", "href"=>"table.php"],
    ["link"=>"Калькулятор", "href"=>"calc.php"],
  ];
?>