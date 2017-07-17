<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
<?php
$index = 0;
for ($j = 0; $j < 10; $j++) {
    $color = "rgb($index,$index,$index)";
    echo "<div style='background-color:$color'></div>";
    $index += 5;

}
echo "<br>";
$index=51;
for ($j = 0; $j < 10; $j++) {
    $color = "rgb($index,$index,$index)";
    echo "<div style='background-color:$color'></div>";
    $index += 5;

}
echo "<br>";
$index = 102;
for ($j = 0; $j < 10; $j++) {
    $color = "rgb($index,$index,$index)";
    echo "<div style='background-color:$color'></div>";
    $index += 5;

}
echo "<br>";
$index = 153;
for ($j = 0; $j < 10; $j++) {
    $color = "rgb($index,$index,$index)";
    echo "<div style='background-color:$color'></div>";
    $index += 5;

}
echo "<br>";
$index = 204;
for ($j = 0; $j < 10; $j++) {
    $color = "rgb($index,$index,$index)";
    echo "<div style='background-color:$color'></div>";
    $index += 5;

}
echo "<br>";
?>
</body>
</html>