<!DOCTYPE html>
<html>
<head>
	<title>SK 6_2 Riszky Ardianzah</title>
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

    <h2>PERSEGI PANJANG</h2>
    <br>
	<?php 
	$p = 24; 
	$l = 400;
	$t = 102;
	function Luaspp(){
		global $p, $l, $luaspersegipanjang;
		$luaspersegipanjang = $p * $l;
			
	}
	Luaspp();
	echo "1. Luas Persegi Panjang = ". $luaspersegipanjang;
	?>
	<?php
	function Kelilingpp(){
		global $p, $l, $kelilingpersegipanjang;
		$kelilingpersegipanjang = $p + $p + $l + $l;
		
	}
	Kelilingpp();
	echo "<br><br>2. Keliling Persegi Panjang = ". $kelilingpersegipanjang;
	?>
	<?php
	function Volumebalok(){
		global $p, $l, $t, $volumebalok;
			$volumebalok = $p * $l * $t;

	}
	Volumebalok();
	echo "<br><br>3. Volume Balok = ". $volumebalok;
	?>

	<h2>SEGITIGA</h2>
    <br>
	<?php 
	$a = 24; 
	$b = 400;
	$c = 2;
	$t = 210;
	$tprisma= 15;
	function Luassegitiga(){
		global $a, $t, $luassegitiga;
		$luassegitiga = 1/2* $a * $t;
			
	}
	Luassegitiga();
	echo "1. Luas Segitiga = ". $luassegitiga;
	?>
	<?php
	function Kelilingsegitiga(){
		global $a, $b, $c, $kelilingsegitiga;
		$kelilingsegitiga = $a + $b + $c;
		
	}
	Kelilingsegitiga();
	echo "<br><br>2. Keliling Segitiga = ". $kelilingsegitiga;
	?>
	<?php
	function Volumeprisma(){
		global $a, $t, $tprisma, $volumeprisma;
			$volumeprisma = (1/2 * $a * $t ) * $tprisma;

	}
	Volumeprisma();
	echo "<br><br>3. Volume Prisma Segitiga = ". $volumeprisma;
	?>

</body>
</html>