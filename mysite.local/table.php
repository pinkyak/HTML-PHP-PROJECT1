<?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $cols = abs((int) $_POST['cols']);
       $rows = abs((int) $_POST['rows']);
       $color = trim(strip_tags($_POST['color']));
     }
     $cols = ($cols) ? $cols : 10;
     $rows = ($rows) ? $rows : 10;
     $color = ($color) ? $color : 'yellow';
?>

  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form method="POST" action="<?php echo $_SERVER['REQUEST_URI']?>">
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
    <?php
      drawTable($cols , $rows , $color);
    ?>
    <!-- Таблица -->
    <!-- Область основного контента -->
  </div>
