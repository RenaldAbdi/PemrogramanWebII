<?php

// Deklarasi Variabel

$jari = 4.2;
$tinggi = 5.4;
$panjang = 8.9;
$lebar = 14.7;
$sisi = 7.9;
$alasprisma = 4;
$tinggiprisma = 8;
$tinggilimas = 10;
$phi = 3.14;

// Deklarasi Rumus Rumus Bangun Ruang

$tabung = $phi * $jari * $jari * $tinggi;
$kerucut = 1/3 * $phi * $jari * $jari * $tinggi;
$bola = 4/3 * $phi * $jari * $jari * $jari;
$prismaalassegitiga = 1/2 * $alasprisma * $tinggiprisma;
$limasalaspersegipanjang = 1/3 * $panjang * $lebar * $tinggilimas;

// NIM Saya adalah 2110817210005
$nim = 5;

// Pengkondisi dengan menggunakan IF ELSE terhadap angka belakang pada NIM, dan akan menampilkan hasil dari rumus rumus
// Dan Terdapat Number Format untuk menampilkan Output dengan format 3 desimal dibelakang koma
if( $nim == 0 || $nim == 1 ) {
    echo number_format($tabung, 3)." m3";
} else if ( $nim == 2 || $nim == 3 ) {
    echo number_format($kerucut, 3)." m3";
} else if ( $nim == 4 || $nim == 5 ) {
    echo number_format($bola, 3)." m3";
} else if ( $nim == 6 || $nim == 7 ) {
    echo number_format($prismaalassegitiga, 3)." m3";
} else if ( $nim == 8 || $nim == 9 ) {
    echo number_format($limasalaspersegipanjang, 3)." m3";
} 

?>