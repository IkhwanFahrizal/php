<?php

	echo "<h1><center>Membuat Looping dari angka 0 sebanyak 9 kali</h1>";

	// Looping sebanyak 9 kali, dengan dimulai dari angka 0 //
	for($i = 0; $i <= 8; $i++){
		for($j = 0; $j <= $i; $j++){
            // Cetak nilai variabel //
			echo $j; 
		}
        // Membuat baris baru setelah selesai loop //
		echo "<br>"; 
	}
?>