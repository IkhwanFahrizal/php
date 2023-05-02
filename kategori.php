<?php

    echo "<h1><center>Menghitung Nilai BMI</h1>";

    // Variabel dengan tipe data string yang berisi nama //
    $nama = "Ikhwan Argian Fahrizal";
    // Variabel dengan tipe data float yang berisi tinggi badan //
    $tinggi_badan = 173;
    // Variabel dengan tipe data float yang berisi berat badan //
    $berat_badan = 55;

    // Menghitung nilai BMI dengan rumus berat badan dibagi tinggi badan kuadrat serta Membulatkan nilai BMI menjadi dua angka di belakang koma //
    $bmi = $berat_badan / pow($tinggi_badan/100, 2);
    $bmi = round($bmi, 2);

    // Output pesan berisi nama dan nilai BMI serta kategori berdasarkan nilai BMI //
    echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk ";
    //jika nilai kurang dari 18.5, kategori "Kurus" //
    if ($bmi < 18.50) {
        echo "Kurus.";
    // jika nilai kurang dari 25, kategori "Normal" //
    } elseif ($bmi < 25) {
        echo "Normal.";
    // jika nilai kurang dari 30, kategori "Gemuk" //
    } elseif ($bmi < 30) {
        echo "Gemuk.";
    }
?>