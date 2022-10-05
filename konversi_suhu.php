<?php 
// xamppmi21/namakalian/fungsi.php
	function konversi_suhu ($sb,$sf, $derajat) {
 	  echo "<h1>Halo, selamat datang di aplikasi konversi suhu dari {$sb} ke {$sf}!</h1>";
	  if($sb =="celsius"){
	  	celsius($sf, $derajat);
	  }elseif ($sb=="reamur") {
	  	reamur($sf, $derajat);
	  }elseif ($sb=="fahrenheit") {
	  	fahrenheit($sf, $derajat);
	  }elseif ($sb=="kelvin") {
	  	kelvin($sf, $derajat);
	  }else{
	  	echo  "<p>Mohon maaf tidak ada suhu {$sb}.</p>";
	  }
	}

	function celsius ($sf, $derajat) {
		if($sf =="reamur"){
			$reamur = 4/5*$derajat;
			echo "<p>Hasi Konversi Suhu dari {$derajat} Celsius ke Reamur adalah {$reamur}.</p>";
		}else if($sf =="fahrenheit"){
			$fahrenheit = 9/5*$derajat+32;
			echo "<p>Hasi Konversi Suhu dari {$derajat} Celsius ke Fahrenheit : {$fahrenheit}.</p>";
		}else if($sf =="kelvin"){
			$kelvin = $derajat+273;
	  		echo "<p>Hasi Konversi Suhu dari {$derajat} Celsius ke Kelvin : {$kelvin}.</p>";
		}else{
			echo  "<p>Mohon maaf tidak ada suhu {$sf}.</p>";
		}
	}

	function reamur ($sf, $derajat) {
		if($sf =="celsius"){
			$celsius = 4/5*$derajat;
			echo "<p>Hasi Konversi Suhu dari {$derajat} Reamur ke Celsius adalah {$celsius}.</p>";
		}else if($sf =="fahrenheit"){
			$fahrenheit = 9/5*$derajat+32;
			echo "<p>Hasi Konversi Suhu dari {$derajat} Reamur ke Fahrenheit : {$fahrenheit}.</p>";
		}else if($sf =="kelvin"){
			$kelvin = $derajat+273;
	  		echo "<p>Hasi Konversi Suhu dari {$derajat} Reamur ke Kelvin : {$kelvin}.</p>";
		}else{
			echo  "<p>Mohon maaf tidak ada suhu {$sf}.</p>";
		}
	}

	function fahrenheit ($sf, $derajat) {
		if($sf =="celsius"){
			$celsius = 4/5*$derajat;
			echo "<p>Hasi Konversi Suhu dari {$derajat} Fahrenheit ke Celsius adalah {$celsius}.</p>";
		}else if($sf =="reamur"){
			$reamur = 9/5*$derajat+32;
			echo "<p>Hasi Konversi Suhu dari {$derajat} Fahrenheit ke Reamur : {$reamur}.</p>";
		}else if($sf =="kelvin"){
			$kelvin = $derajat+273;
	  		echo "<p>Hasi Konversi Suhu dari {$derajat} Fahrenheit ke Kelvin : {$kelvin}.</p>";
		}else{
			echo  "<p>Mohon maaf tidak ada suhu {$sf}.</p>";
		}
	}

	function kelvin ($sf, $derajat) {
		if($sf =="celsius"){
			$celsius = 4/5*$derajat;
			echo "<p>Hasi Konversi Suhu dari {$derajat} Kelvin ke Celsius adalah {$celsius}.</p>";
		}else if($sf =="reamur"){
			$reamur = 9/5*$derajat+32;
			echo "<p>Hasi Konversi Suhu dari {$derajat} Kelvin ke Reamur : {$reamur}.</p>";
		}else if($sf =="fahrenheit"){
			$fahrenheit = $derajat+273;
	  		echo "<p>Hasi Konversi Suhu dari {$derajat} Kelvin ke Fahrenheit : {$fahrenheit}.</p>";
		}else{
			echo  "<p>Mohon maaf tidak ada suhu {$sf}.</p>";
		}
	}
	konversi_suhu("fahrenheit","kelvin", 10);
?>

