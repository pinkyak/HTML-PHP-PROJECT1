
  <div id="content">
    <!-- Заголовок -->
    <h1>Калькулятор школьника</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
    function clearInt($data){
      
    }
          if(!empty($_POST)){
              if (empty($_POST['num1'])){
                  $err[] = 'в поле 1 ничего не записано';
              }elseif(!is_numeric($_POST['num1'])){
                  $err[] = 'в поле 1 содержиться не цифра';
              }

              if (empty($_POST['num2'])){
                  $err[] = 'в поле 2 ничего не записано';
              }elseif(!is_numeric($_POST['num2'])){
                  $err[] = 'в поле 2 содержиться не цифра';
              }

            
              if (empty($_POST['operator'])){
                $err[] = 'в поле оператор ничего не записано';
              }elseif (preg_match($pattern = '/[\+\-\*\/]/', $_POST['operator'])) {
                switch(true){
                  case $_POST['operator'] == '+' :
                    $number1 = $_POST['num1'];
                    $number2 = $_POST['num2'];
                    $result[] =  "Результат добавлния равен: ".$number1 + $number2;
                    break;
                  case $_POST['operator'] == '-':
                    $number1 = $_POST['num1'];
                    $number2 = $_POST['num2'];
                    $result[] = "Результат отнимания равен: ".$number1 - $number2;
                    break;
                  case $_POST['operator'] == '*':
                    $number1 = $_POST['num1'];
                    $number2 = $_POST['num2'];
                    $result[] = "Результат умножения равен: ".$number1 * $number2;
                    break;
                  case $_POST['operator'] == '/';
                      $number1 = $_POST['num1'];
                      $number2 = $_POST['num2'];
                    if($number2 !=='0' ){
                      $result[] = "Результат деления равен: ".$number1 / $number2;
                      break;
                    }else {
                      $err[] = "на ноль делить запрешно!";
                    }
                }
              }else {
                $err[] =  "Поле не содержит арифметические операторы";
              }

              if (!empty($err)){
                  foreach ($err as $erors){
                      echo "<strong>".$erors."</strong>".'<br>';
                  }
              }
              if (!empty($result)){
                foreach ($result as $resultat){
                  echo "<strong>".$resultat."</strong>";
                }
              }

          }

?>
    <form action='' method='POST'>
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
    <!-- Область основного контента -->
  </div>