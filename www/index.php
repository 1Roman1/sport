<?php
$datetime1 = new DateTime('2017-08-06');
$datetime2 = new DateTime(date("d.m.Y"));
$interval = $datetime1->diff($datetime2);
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sport</title>
</head>
<body>
<h1>
    <?php
    echo "Работа над проектом ведется <b>" . $interval->format('%a дней') . "</b><br>";
    echo "Начало работы ..";
    ?>
</h1>
</body>
</html>
