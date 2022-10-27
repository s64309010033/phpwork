<?php

    $d = $_POST['side_d'];
    $l = $_POST['side_l'];
    $h = $_POST['side_h'];
    
    $area = ( $d * $l )*$h;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center> 
    <h1>
    <hr color="Brown">
    <hr color="HotPink">
        <?php
        echo "*•˚✩☁︎︎⋆｡พื้นที่สี่เหลี่ยมมุมฉาก⋆⁺₊⋆¨";
        ?>
    </h1>
    <hr color="HotPink">
    <hr color="Brown">
    <p style="color:Black; font-size: 30px">
        <?php
        echo "ความลึก d : ".$d;
        echo "<br>";
        echo "ความยาว l : ".$l;
        echo "<br>";
        echo "ความสูง h : ".$h;
        echo "<br>";
        echo "มีพื้นที่ เท่ากับ ".$area."ตารางหน่วย";
        ?>
    </p>
    </center>
</body>
</html>