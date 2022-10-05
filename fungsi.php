<?php 
// xamppmi21/namakalian/fungsi.php
	function sapaA ($nama) {
	  echo "<h1>Halo, selamat datang {$nama}!</h1>";
	  echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";
	}

	function sapaB () {
	  echo "<h1>Halo, selamat datang!</h1>";
	  echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";
	}
	function sapaC ($nama, $situs) {
	  echo "<h1>Halo, selamat datang {$nama}!</h1>";
	  echo "<p>Terima kasih telah berkunjung ke situs {$situs}.</p>";
	}
	function sapaD ($nama, $situs, $ucapan) {
 	  echo "<h1>Halo, selamat datang {$nama}!</h1>";
	  echo "<p>{$ucapan} berkunjung ke situs {$situs}.</p>";
	}
	function sapaE () {
	  echo "<h1>Halo, selamat datang!</h1>";
	  echo "<p>Terima kasih telah berkunjung ke situs kami.</p>";
	}


	sapaC("Haisyam","MI21B");
	sapaA("Haisyam");
	sapaD("Haisyam", "MI21A","Mohon maaf anda");
?>

