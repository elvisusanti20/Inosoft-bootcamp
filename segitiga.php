<?php

function luasLingkaran($r)
{
    return pi() * pow($r, 2);
}

function kelilingLingkaran($r)
{
    return 2 * pi() * $r;
}

function luasPersegi($panjang, $lebar)
{
    return $panjang * $lebar;
}

for ($i = 1; $i <= 100; $i++) {
    $formattedNumber = number_format($i, 2);

    if ($i % 3 === 0 || $i % 5 === 0) {
        if ($i % 3 === 0) {
            $r = $i / 3;
            echo number_format(luasLingkaran($r), 2) . "<br>";
        } 
        if ($i % 5 === 0) {
            $r = $i / 5;
            echo number_format(kelilingLingkaran($r), 2) . "<br>";
        } 
        if ($i % 3 === 0 && $i % 5 === 0) {
            $panjang = $i / 3;
            $lebar = $i / 5;
            echo number_format(luasPersegi($panjang, $lebar), 2) . "<br>";
        }
    }
    echo "<br>"; // Menambah baris setelah setiap iterasi
}

?>
