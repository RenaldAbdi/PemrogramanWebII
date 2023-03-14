<?php

// Membuat Associative Array 
$daftarsmartphonesamsung = ["S22" => "Samsung Galaxy S22", "S22+" => "Samsung Galaxy S22+", "A03" => "Samsung Galaxy A03", "Xcover5" => "Samsung Galaxy Xcover 5"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Modul 1 Soal 5</title>
    <style>
        /* Membuat style untuk ukuran bagian table, table header dan table data */
        table, th, td {
            border: 1px solid;
        }
        /* Membuat style untuk ukuran font, warna background, dan padding pada table header */
        th {
            font-size: x-large;
            background-color: red;
            padding: 20px 0px;
        }
    </style>
</head>

<body>
    <!-- Awal Tabel -->
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <!-- Memanggil dan menampilkan data pada array yang mengasosiasikan S22 -->
            <td><?php echo $daftarsmartphonesamsung["S22"]; ?></td>
        </tr>
        <tr>
            <!-- Memanggil dan menampilkan data pada array yang mengasosiasikan S22+ -->
            <td><?php echo $daftarsmartphonesamsung["S22+"]; ?></td>
        </tr>
        <tr>
            <!-- Memanggil dan menampilkan data pada array yang mengasosiasikan A03 -->
            <td><?php echo $daftarsmartphonesamsung["A03"]; ?></td>
        </tr>
        <tr>
            <!-- Memanggil dan menampilkan data pada array yang mengasosiasikan Xcover5 -->
            <td><?php echo $daftarsmartphonesamsung["Xcover5"]; ?></td>
        </tr>
    </table>
    <!-- Akhir Tabel -->
</body>
</html>