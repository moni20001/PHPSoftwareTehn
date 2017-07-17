<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])){
    $number = intval($_GET['num']);
    for($i=$number-1;$i>=1;$i--) {
        if ($number % $i == 0) {

        } else {
            echo "$i ";
        }
    }
}
?>

</body>
</html>