<?php 
// mendefinisikan array $mahasiswa yang berisi data mahasiswa dan mata kuliah yang diambil beserta jumlah SKS dari setiap mata kuliah
$mahasiswa = [
    ["no" => 1, "nama" => "Ridho", "matkul" => [["nama_mk" => "Pemrograman I", "sks" => 2], ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1], ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], ["nama_mk" => "Arsitektur Komputer", "sks" => 3]]],
    ["no" => 2, "nama" => "Ratna", "matkul" => [["nama_mk" => "Basis Data I", "sks" => 2], ["nama_mk" => "Praktikum Basis Data I", "sks" => 1], ["nama_mk" => "Kalkulus", "sks" => 3]]],
    ["no" => 3, "nama" => "Tono", "matkul" => [["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3], ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3], ["nama_mk" => "Komputasi Awan", "sks" => 3], ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]]]
];

// melakukan perulangan untuk menambahkan jumlah sks dan keterangan pada tiap mahasiswa
for ($i = 0; $i < count($mahasiswa); $i++) {
    $jumlahSKS = 0;
    for ($j = 0; $j < count($mahasiswa[$i]["matkul"]); $j++) {
        $jumlahSKS += $mahasiswa[$i]["matkul"][$j]["sks"];
    }
    $mahasiswa[$i]["jumlahSKS"] = $jumlahSKS;
    if ($mahasiswa[$i]["jumlahSKS"] < 7) {
        $mahasiswa[$i]["keterangan"] = "Revisi KRS";
    } else {
        $mahasiswa[$i]["keterangan"] = "Tidak Revisi KRS";
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        /* membuat style untuk table, tr, td, dan th */
        table,
        tr,
        td,
        th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Praktikum Modul 4 Soal 3</title>
</head>

<body>
    <table>
        <tr style="background-color: #D3D3D3;">
        <!-- menampilkan table header dengan warna background abu abu -->
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php 
        // melakukan perulangan for untuk setiap mahasiswa dalam array $mahasiswa dan setiap mata kuliah yang diambil
        for ($i = 0; $i < count($mahasiswa); $i++) {
            for ($j = 0; $j < count($mahasiswa[$i]["matkul"]); $j++) {
                echo "<tr>";
                // pengkondisian untuk menampilkan hasil semua data yang disimpan pada sebelumnya, yaitu no, nama mahasiswa, total sks dan keterangan
                if ($j == 0) {
                    echo "<td>" . $mahasiswa[$i]["no"] . "</td>";
                    echo "<td>" . $mahasiswa[$i]["nama"] . "</td>";
                    echo "<td>" . $mahasiswa[$i]["matkul"][$j]["nama_mk"] . "</td>";
                    echo "<td>" . $mahasiswa[$i]["matkul"][$j]["sks"] . "</td>";
                    echo "<td>" . $mahasiswa[$i]["jumlahSKS"] . "</td>";
                    // pengkondisian jika keterangannya Revisi KRS maka akan memiliki warna background merah, sedangkan Tidak Revisi KRS akan memiliki warna background hijau
                    if ($mahasiswa[$i]["keterangan"] == "Revisi KRS") {
                        echo "<td style='background-color: #FF3131'>" . $mahasiswa[$i]["keterangan"] . "</td>";
                    } else {
                        echo "<td style='background-color: #1AA857'>" . $mahasiswa[$i]["keterangan"] . "</td>";
                    }
                } else {
                    // pengkondisian hanya untuk menampilkan nama mk dan sks saja
                    echo "<td></td>";
                    echo "<td></td>";
                    echo "<td>" . $mahasiswa[$i]["matkul"][$j]["nama_mk"] . "</td>";
                    echo "<td>" . $mahasiswa[$i]["matkul"][$j]["sks"] . "</td>";
                    echo "<td></td>";
                    echo "<td></td>";
                }
                echo "</tr>";
            }
        } ?>
    </table>
</body>

</html>