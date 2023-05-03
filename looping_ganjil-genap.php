<?php
    echo "<h1><center>Looping angka ganjil - genap</h1>";

    for ($i = 1; $i <= 9; $i++) {
        if ($i % 2 == 0) {
            echo "$i adalah bilangan genap" . "<br>";
        }   
        else {
            echo "$i adalah bilangan ganjil" . "<br>";
        }
    }
?>