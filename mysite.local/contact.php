
<?php
$size = ini_get("post_max_size");
$letter = strtolower($size[strlen($size)-1]);
$size = (int) $size;
	switch($letter){
		case 'g': $size *= 1024;
		case 'm': $size *= 1024;
		case 'k': $size *= 1024;
  }
?>

  <div id="content">
    <!-- Заголовок -->
    <h1>Обратная связь</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>
    <p>максимальний розмір відравних файлів <?php echo $size?> байтів </p>
    <!-- Область основного контента -->
  </div>
