<?php 
// xamppmi21/namakalian/fungsi.php

	function hitung ($proses, $x, $y) {
 	  echo "<h1>Halo, selamat datang di aplikasi {$proses}!</h1>";
	  echo "<p>Nilai pertama : {$x}.</p>";
	  echo "<p>Nilai kedua : {$y}.</p>";

	  if($proses =="jumlah"){
	  	$hasil = $x+$y;
	  	echo  "<p>Hasilnya adalah {$hasil}.</p>";
	  }elseif ($proses=="kurang") {
	  	$hasil = $x-$y;
	  	echo  "<p>Hasilnya adalah {$hasil}.</p>";
	  }else{
	  	echo  "<p>Mohon maaf tidak ada aplikasi {$proses}.</p>";
	  }
	}

	hitung("kurang", 8,4);
?>

