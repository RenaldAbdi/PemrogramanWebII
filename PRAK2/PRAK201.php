<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Modul 2 Soal 1</title>
</head>

<body>
    <form method="POST">
        <!-- menampilkan label untuk input nama 1, nama 2, nama 3 dan tombol submit -->
        Nama: 1 <input type="text" name="inputnama1"></br>
        Nama: 2 <input type="text" name="inputnama2"></br>
        Nama: 3 <input type="text" name="inputnama3"></br>
        <input type="submit" name="submit" value="Urutkan">
</form></br>

<?php
    // melakukan pengecekkan apakah tombol submit ditekan, jika iya maka akan menyimpan data input
    if (isset($_POST['submit'])) {
        $inputnama1 = $_POST['inputnama1'];
        $inputnama2 = $_POST['inputnama2'];
        $inputnama3 = $_POST['inputnama3'];

        // pengkondisian yang digunakan untuk melakukan pengurutan terhadap nama dari terkecil hingga terbesar, dan menampilkannya
        if ($inputnama1 < $inputnama2 && $inputnama1 < $inputnama3) {
            if ($inputnama2 < $inputnama3) {
                echo "$inputnama1 <br> $inputnama2 <br> $inputnama3";
            } else {
                echo "$inputnama1 <br> $inputnama3 <br> $inputnama2";
            }
        } elseif ($inputnama2 < $inputnama1 && $inputnama2 < $inputnama3) {
            if ($inputnama1 < $inputnama3) {
                echo "$inputnama2 <br> $inputnama1 <br> $inputnama3";
            } else {
                echo "$inputnama2 <br> $inputnama3 <br> $inputnama1";
            }
        } else {
            if ($inputnama1 < $inputnama2) {
                echo "$inputnama3 <br> $inputnama1 <br> $inputnama3";
            } else {
                echo "$inputnama3 <br> $inputnama2 <br> $inputnama1";
            }
        }
    }
?>
</body>
</html>