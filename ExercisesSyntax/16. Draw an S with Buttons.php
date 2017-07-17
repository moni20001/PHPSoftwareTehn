<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
function whole(){
    for($i=0;$i<5;$i++){
        echo "<button style='background-color:blue'>1</button>";
    }
    echo "<br>";
}
function leftSide(){
    echo "<button style='background-color:blue'>1</button>";
    for($i=1;$i<5;$i++){
        echo "<button>0</button>";
    }
    echo "<br>";
}
function rightSide(){
    for($i=1;$i<5;$i++){
        echo "<button>0</button>";
    }
    echo "<button style='background-color:blue'>1</button>";
    echo "<br>";
}

whole();
for($i=0;$i<3;$i++){
    leftSide();
}
whole();
for($i=0;$i<3;$i++){
    rightSide();
}
whole();
?>
</body>
</html>