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
if (isset($_GET['num'])) {
    $number = intval($_GET['num']);
    for ($i = $number; $i > 1; $i--) {
        if ($i == 2 || $i == 3) {
            echo "$i ";
        } elseif ($i % 2 == 0 || $i % 3 == 0) {

        } else {
            echo "$i ";
        }
    }

}

?>
</body>
</html>