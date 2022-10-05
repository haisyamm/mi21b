<?php 
// xamppmi21/namakalian/fungsi.php

	function tambah ($x, $y) {
	  echo "<p>Nilai pertama : {$x}.</p>";
	  echo "<p>Nilai kedua : {$y}.</p>";
		$hasil = $x+$y;
		echo  "<p>Hasilnya adalah {$hasil}.</p>";
	}
	function kurang ($x, $y) {
	  echo "<p>Nilai pertama : {$x}.</p>";
	  echo "<p>Nilai kedua : {$y}.</p>";
	  	$hasil = $x+$y;
	  	echo  "<p>Hasilnya adalah {$hasil}.</p>";
	}
	function hitung ($proses, $x, $y) {
 	  echo "<h1>Halo, selamat datang di aplikasi {$proses}!</h1>";
	  if($proses =="jumlah"){
	  	kurang ($x, $y);
	  }elseif ($proses=="kurang") {
	  	tambah ($x, $y);
	  }else{
	  	echo  "<p>Mohon maaf tidak ada aplikasi {$proses}.</p>";
	  }
	}

	hitung("jumlah", 8,4);
?>

