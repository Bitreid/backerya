<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/style.css">

  <title>Размножение бактерий</title>
</head>
<body>

  <main>
    <div class="container">

      <?php
        //если форма была отправлена, то расчитываем количество бактерий
        if ($_POST)
        {
          echo "<h1>Ого сколько расплодилось</h1>";
          echo "<hr>";

          //для наглядности выводим из POST в переменные
          $red = $_POST['red'];
          $green = $_POST['green'];
          $count = $_POST['count'];

          //реализуем формулу исходя из условий
          $output_red = $count*($red*4+$green*2);
          $output_green = $count*($red*3+$green*5);
          //файл для вывода данных
          require 'output_data.php';
        }
          //в противном случае запрашиваем данные для расчета
          else
        {
          echo "<h1>Введите данные для превращений бактерий</h1>";
          echo "<hr>";
          //файл для ввода данных
          require 'input_data.php';
        }
       ?>

    </div>
  </main>
</body>
</html>
