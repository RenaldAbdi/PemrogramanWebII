<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Modul 2 Soal 3</title>
</head>

<body>
    <form action="" method="POST">      
        <!-- menginputkan sebuah nilai -->
        Nilai : <input type="number" name="nilai"></input></br>
        <!-- tombol submit untuk menyimpan data yang diinput -->
        <input type="submit" name="submit" value="Konversi"></input>
    </form> 
</body>
</html>

<?php
    // melakukan pengecekkan apakah tombol submit ditekan, jika iya maka akan menyimpan data input
    if (isset($_POST["submit"])) {     
        $nilai = $_POST["nilai"]; 
        // pengkondisian yang digunakan untuk mengecekkan hasil dari nilai
        switch ($nilai) {
            // jika nilai adalah 0
            case 0:
                echo "<h2>Hasil : Nol</h2>";
                break;
            // jika nilai lebih dari 0 dan kurang dari 10
            case ($nilai > 0 && $nilai < 10):
                echo "<h2>Hasil : Satuan</h2>";
                break;
            // jika nilai lebih dari sama dengan 11 dan kurang dari 20
            case ($nilai >= 11 && $nilai < 20):
                echo "<h2>Hasil : Belasan</h2>";
                break;
            // jika nilai lebih dari sama dengan 10 dan kurang dari 100
            case ($nilai >= 10 && $nilai < 100):
                echo "<h2>Hasil : Puluhan</h2>";
                break;
            // jika nilai lebih dari sama dengan 100 dan kurang dari 1000
            case ($nilai >= 100 && $nilai < 1000):
                echo "<h2>Hasil : Ratusan</h2>";
                break;
            // default output yang muncul diluar dari pengkondisian diatas
            default:
                echo "<h2>Hasil : Anda Menginput Melebihi Limit Bilangan</h2>";
                break;
            }
    }
?>