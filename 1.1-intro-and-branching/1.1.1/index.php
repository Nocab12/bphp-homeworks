<?php 
$variable = array(
    "foo" => "bar",
    "bar" => "foo",
);
if(is_bool($variable)) {
    echo 'bool';
} elseif (is_float($variable)) {
    echo 'float';
} elseif(is_int($variable)) {
    echo 'int';
} elseif(is_string($variable)) {
    echo 'string';
} elseif(is_null($variable)) {
    echo 'null';
} else {
    echo 'other';
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
            <h2><?= var_dump($variable); ?></h1>
        </div>
    </div>
</body>
</html>