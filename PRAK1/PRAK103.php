<?php

// Deklarasi variabel
$celcius = 37.841;

// Deklarasi Rumus Rumus
$fahrenheit = (9/5) * $celcius + 32;
$reamur = (4/5) * $celcius;
$kelvin = $celcius + 273.15;

// Menampilkan Output dengan format 4 desimal dibelakang koma
echo "Fahrenheit (F) = ".number_format($fahrenheit, 4)."<br>";
echo "Reamur (R) = ".number_format($reamur, 4)."<br>";
echo "Kelvin (K) = ".number_format($kelvin, 4);

?>