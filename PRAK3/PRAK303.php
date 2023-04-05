<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Modul 3 Soal 3</title>
</head>

<body>
    <form action="" method="POST">
        <!-- menginputkan batas bawah dan batas atas deret bilangan -->
        Batas Bawah : <input type="number" name="bawah"></br>
        Batas Atas : <input type="number" name="atas"></br>
        <!-- tombol submit untuk menyimpan data yang diinput -->
        <input type="submit" name="submit" value="Cetak"></br>
    </form></br>
</body>

</html>

<?php 
// melakukan pengecekkan apakah tombol submit ditekan, jika iya maka akan menyimpan data input
if (isset($_POST['submit'])) {
    // mendeklarasikan beberapa variabel
    $bawah = $_POST['bawah'];
    $atas = $_POST['atas'];
    $i = $bawah;
    // perulangan do-while yang mencetak angka atau gambar bintang secara berulang hingga variabel $i mencapai nilai yang ditentukan dalam variabel $atas
    do {
        if (($i + 7) % 5 == 0) {
            echo "<img src='bintang.png' width='15px' height='15px'>";
        } else {
            echo $i;
        }
        echo "&nbsp";
        $i++;
    } while ($i <= $atas);
}
?>