<!DOCTYPE html>
<html>
<head>
    <title>SK 6_1 Riszky Ardianzah</title>
</head>
<body>
    <h2>LINGKARAN</h2>
    <br>
    <?php
    $jari = 24 ;
    $phi = 3.14 ;       
    function luas(){
        global $jari, $phi, $luasLing;
        $luasLing = $phi * $jari * $jari;

    }
    luas();
    echo "1. Luas Lingkaran = ". $luasLing;
    ?>
    <?php
    function keliling(){
        global $jari, $phi, $kelLing;
        $kelLing = 2 * $phi * $jari;

    }
    keliling();
    echo "<br><br>2. Keliling Lingkaran = ". $kelLing;
    ?>
    <?php
    function volume(){
        global $jari, $phi, $volumeBola;
        $volumeBola = 4 * $phi * $jari * $jari;

    }
    volume();
    echo "<br><br>3. Volume Bola = ". $volumeBola;
    ?>

</body>
</html>