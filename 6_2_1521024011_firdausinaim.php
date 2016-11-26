<!DOCTYPE html>
<html>
<head>
	<title>SK 6_2 firdaus</title>
</head>
<body>
	<h2>LINGKARAN</h2>
    <br>
    <?php
    $jari = 12 ;
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
	$p = 12; 
	$l = 521;
	$t = 240;
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

	<h2>Persegi</h2>
    <br>
	<?php 
	$s = 12; 
	function LuasPersegi(){
		global $s, $s, $LuasPersegi;
		$LuasPersegi= $s * $s;
			
	}
	LuasPersegi();
	echo "1. Luas Persegi = ". $LuasPersegi;
	?>
	<?php
	function KelilingPersegi(){
		global $s, $kelilingPersegi;
		$kelilingPersegi = 4 * $s;
		
	}
	kelilingPersegi();
	echo "<br><br>2. Keliling Persegi = ". $kelilingPersegi;
	?>
	<?php
	function VolumeKubus(){
		global $s, $VolumeKubus;
			$VolumeKubus = $s * $s * $s;

	}
	VolumeKubus();
	echo "<br><br>3. VolumeKubus = ". $VolumeKubus;
	?>

</body>
</html>