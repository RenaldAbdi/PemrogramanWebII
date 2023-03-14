<?php

// Membuat Array
$daftarsmartphonesamsung = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Modul 1 Soal 4</title>
    <style>
        /* Membuat style untuk ukuran bagian table, table header dan table data */
        table, th, td {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <!-- Mulai Tabel -->
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <!-- Memanggil dan menampilkan data yang terdapat pada array indeks 0 -->
            <td><?php echo $daftarsmartphonesamsung[0]; ?></td>
        </tr>
        <tr>
            <!-- Memanggil dan menampilkan data yang terdapat pada array indeks 1 -->
            <td><?php echo $daftarsmartphonesamsung[1]; ?></td>
        </tr>
        <tr>
            <!-- Memanggil dan menampilkan data yang terdapat pada array indeks 2 -->
            <td><?php echo $daftarsmartphonesamsung[2]; ?></td>
        </tr>
        <tr>
            <!-- Memanggil dan menampilkan data yang terdapat pada array indeks 3 -->
            <td><?php echo $daftarsmartphonesamsung[3]; ?></td>
        </tr>
    </table>
    <!-- Akhir Tabel -->
</body>

</html>