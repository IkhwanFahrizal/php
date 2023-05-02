<?php

    echo "<h1><center>Menghitung Ketegori Nilai</h1>";

    // nilai yang akan dihitung kategorinya
    $nilai = 95; 

    // jika nilai di antara 90 dan 100, kategori A //
    if($nilai >= 90 && $nilai <= 100) { 
        echo "Nilai Anda Adalah: " . $nilai . ", Anda termasuk kategori A";
        
    //jika nilai di antara 80 dan 89, kategori B //
    } elseif($nilai >= 80 && $nilai < 90) { 
        echo "Nilai Anda Adalah: " . $nilai . ", Anda termasuk kategori B";

    //jika nilai di antara 70 dan 79, kategori C //
    } elseif($nilai >= 70 && $nilai < 80) {  
        echo "Nilai Anda Adalah: " . $nilai . ", Anda termasuk kategori C";

    //jika nilai kurang dari 70, kategori D //
    } elseif($nilai >=0 && $nilai < 70) { 
        echo "Nilai Anda Adalah: " . $nilai . ", Anda termasuk kategori D";
    }  
?>
