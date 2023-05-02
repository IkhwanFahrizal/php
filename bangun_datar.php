<?php
    echo "<h1><center>Menghitung 5 macam luas jenis bangun datar</h2>";

    //menghitung luas persegi //
    function luas_persegi($sisi){
        $luas = $sisi * $sisi;
        return $luas;
    }
    $sisi = 6;
    echo "<h2>Menghitung Luas Persegi</h2>";
    echo "Rumus : L = sisi x sisi"."<br>";
    echo "Sisi = $sisi" . "<br>";
    echo "Luas = s x s" . "<br>";
    echo "Luas = $sisi x $sisi " . "<br>";
    echo "Luas = " . luas_persegi($sisi) . "<br>";


    //menghitung luas persegi panjang //
    function luas_persegi_panjang($panjang, $lebar){
        $luas = $panjang * $lebar;
        return $luas;
    }
    $panjang = 10;
    $lebar = 6;
    echo "<h2>Menghitung Luas Persegi Panjang</h2>";
    echo "Rumus : L = panjang x sisi"."<br>";
    echo "Panjang = $panjang" . "<br>";
    echo "Lebar = $lebar" . "<br>";
    echo "Luas = p x l" . "<br>";
    echo "Luas = $panjang x $lebar " . "<br>";
    echo "Luas = " . luas_persegi_panjang($panjang, $lebar) . "<br>";
    

    //menghitung luas segitiga //
    function luas_segitiga($alas, $tinggi){
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }
    $alas = 12;
    $tinggi = 6;
    echo "<h2>Menghitung Luas Segitiga</h2>";
    echo "Rumus : L = 1/2 x a x t" . "<br>";
    echo "Alas = $alas" . "<br>";
    echo "Tinggi = $tinggi" . "<br>";
    echo "Luas = 1/2 x $alas x $tinggi " . "<br>";
    echo "Luas = " . luas_segitiga($alas, $tinggi) . "<br>";


    // menghitung luas lingkaran //
    function luas_lingkaran($jari_jari){
        $luas = 3.14 * $jari_jari * $jari_jari;
        return $luas;
    }
    $jari_jari = 8;
    echo "<h2>Menghitung Luas Lingkaran</h2>";
    echo "Rumus = 3.14 x r x r" . "<br>";
    echo "Jari-jari = $jari_jari" . "<br>";
    echo "Luas = 3.14 x $jari_jari x $jari_jari " . "<br>";
    echo "Luas = " . luas_lingkaran($jari_jari) . "<br>"; 

    
    //menghitung luas trapesium //
    function luas_trapesium($sisi_a, $sisi_b, $tinggi){
        $luas = 0.5 * ($sisi_a + $sisi_b) * $tinggi;
        return $luas;
    }
    $sisi_a = 8;
    $sisi_b = 10;
    $tinggi = 6;
    echo "<h2>Menghitung Luas Trapesium</h2>";
    echo "Rumus = 1/2 x (a + b) x t" . "<br>";
    echo "sisi a = $sisi_a" . "<br>";
    echo "sisi b = $sisi_b" . "<br>";
    echo "tinggi = $tinggi" . "<br>";
    echo "Luas = 1/2 x ($sisi_a + $sisi_b) x $tinggi " . "<br>";
    echo "Luas = " . luas_trapesium($sisi_a, $sisi_b, $tinggi) . "<br>";  
?>