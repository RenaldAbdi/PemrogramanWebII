<?php
// mendeklarasikan variabel bintang = NULL dan gambar string bintang.png
$bintang = NULL;
$gambar = "bintang.png";
// melakukan pengecekkan apakah tombol submit ditekan, jika iya maka akan menyimpan data input
if (isset($_POST['bintang'])) {
    $bintang = $_POST['bintang'];
}
// melakukan pengecekkan apakah tombol tambah ditekan, jika iya maka nilai bintang ditambah 1
if (isset($_POST['tambah'])) {
    $bintang++;
}
// melakukan pengecekkan apakah tombol kurang ditekan, jika iya maka nilai bintang dikurang 1
if (isset($_POST['kurang'])) {
    $bintang--;
}
?>
<!-- Jika variabel $bintang tidak kosong, maka akan menampilkan jumlah bintang yang diminta -->
<?php if (!empty($bintang)) {
    echo "Jumlah Bintang : $bintang "; ?>
    <br><br>
<?php } ?>

<!-- perulangan for yang digunakan untuk menampilkan gambar bintang -->
<?php for ($i = 0; $i < $bintang; $i++) {
    echo '<img src=' . $gambar . ' width=100px height=100px>';
}
?>

<!-- perulangan if jika $bintang kosong (belum diset), maka menampilkan form untuk menginputkan jumlah bintang yang diinginkan -->
<?php if ($bintang == 0): ?>
    <form action="" method="POST">
        Jumlah Bintang <input type="number" name="bintang" required><br>
        <button type="submit">Submit</button><br>
    </form>

<!--  Jika variabel $bintang sudah di-set, maka menampilkan form untuk menambah atau mengurangi jumlah bintang yang sudah di-set sebelumnya -->
<?php endif;
if ($bintang != 0): ?>
    <form action="" method="POST">
        <button name="tambah">Tambah</button>
        <input type='hidden' name='bintang' value='<?= $bintang; ?>' />
        <button name="kurang">Kurang</button>
    </form>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Modul 3 Soal 4</title>
</head>