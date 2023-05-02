<?php
    echo "<h1><center>Menghitung 3 Macam Volume Bangun Ruang</h1>";

    // menghitung volume kubus //
    function volume_kubus($sisi){
        $volume = $sisi * $sisi * $sisi;
        return $volume;
    }
    $sisi = 8;
    echo "<h2>Menghitung Volume Kubus</h2>";
    echo "Rumus volume = s x s x s" . "<br>";
    echo "Sisi = $sisi" . "<br>";
    echo "Volume = $sisi x $sisi x $sisi" . "<br>";
    echo "Volume = " . volume_kubus($sisi) . "<br>";


    // menghitung volume balok //
    function volume_balok($panjang, $lebar, $tinggi){
        $volume = $panjang * $lebar * $tinggi;
        return $volume;
    }
    $panjang = 10;
    $lebar = 8;
    $tinggi = 6;
    echo "<h2>Menghitung Volume Balok</h2>";
    echo "Rumus volume = p x l x t" . "<br>";
    echo "Panjang = $panjang" . "<br>";
    echo "Lebar = $lebar" . "<br>";
    echo "Tinggi = $tinggi" . "<br>";
    echo "Volume = $panjang x $lebar x $tinggi" . "<br>";
    echo "Volume = " . volume_balok($panjang, $lebar, $tinggi) . "<br>";


    // menghitung volume tabung //
    function volume_tabung($jari_jari, $tinggi){
        $volume = 3.14 * $jari_jari * $jari_jari * $tinggi;
        return $volume;
    } 
    $jari_jari = 10;
    $tinggi = 15;
    echo "<h2>Menghitung Volume Tabung</h2>";
    echo "Rumus volume = 3.14 x r x r x t" . "<br>";
    echo "Jari-jari = $jari_jari" . "<br>";
    echo "Tinggi = $tinggi" . "<br>";
    echo "Volume = 3.14 x $jari_jari x $jari_jari x $tinggi" . "<br>";
    echo "Volume = " . volume_tabung($jari_jari, $tinggi) . "<br>";
?>