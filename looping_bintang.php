<?php

	echo "<h1><center>Membuat Looping Bintang Menurun</h1>";

	// Loop dari 9 hingga 1, dengan menurun //
	for($i = 9; $i >= 1; $i--){
		for($j = 1; $j <= $i; $j++){
            // Cetak bintang //
			echo "*"; 
		}
        // Membuat baris baru setelah selesai loop //
		echo "<br>"; 
	}
?>