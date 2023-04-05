<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Modul 3 Soal 1</title>
</head>

<body>
    <form action="" method="POST">
        <!-- menginputkan jumlah peserta yang diinginkan -->
        Jumlah Peserta: <input type="number" name="nilai"></br>
        <!-- tombol submit untuk menyimpan data yang diinput -->
        <input type="submit" name="submit" value="Cetak">
    </form>
</body>

</html>
<?php
// melakukan pengecekkan apakah tombol submit ditekan, jika iya maka akan menyimpan data input
if (isset($_POST['submit'])) {
    $nilai = $_POST['nilai'];
    $i = 1;
    // pengkondisian while yang digunakan untuk menampilkan hasil yang sesuai dengan soal
    while ($i <= $nilai) {
        if ($i % 2 == 0) {
            // jika bilangan genap maka fontnya akan berwarna hijau
            echo "<h2><font color='green'>Peserta Ke-$i</font></br>";
        } else {
            // jika bilangan ganjil maka fontnya akan berwarna merah
            echo "<h2><font color='red'>Peserta Ke-$i</font></br>";
        }
        $i++;
    }
}
?>