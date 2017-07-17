<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php
    if(isset($_GET['num'])){
        $number = $_GET['num'];
        for ($i =1;$i<=$number;$i++){
            echo $i%2==0 ? "$i " : "";
        }

    }

    ?>
</body>
</html>