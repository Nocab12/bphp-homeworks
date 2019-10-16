<?php
date_default_timezone_set('Europe/Moscow'); 
$time = date ("H:m");
$days = array(
    'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
    'Четверг', 'Пятница', 'Суббота'
);
$dayWeek = $days[(date('w'))];
if($time >= 6 and $time <= 10) {
    $greeting = 'Доброе утро';
    $image = 'img/morning.jpg';
} elseif($time >= 11 and $time <= 17) {
    $greeting = 'Добрый день';
    $image = 'img/day.jpg';
} elseif($time >= 18 and $time <= 22) {
    $greeting = 'Добрый вечер';
    $image = 'img/evening.jpg';
} elseif(($time >= 0 and $time <= 5) or $time>=23) {
    $greeting = 'Доброй ночи!';
    $image = 'img/night.jpg';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.0</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="img" style="background-image: url(<?= $image; ?>)">
        <div class="greeting">
            <p><?= $greeting ?></p>
            <p><?="Сегодня $dayWeek"  ?></p>
            
        </div>
    </div>
</body>
</html>