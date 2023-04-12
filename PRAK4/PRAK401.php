<?php 
// mendeklarasikan variabel panjang, lebar, nilai dengan nilai kosong
$panjang = "";
$lebar = "";
$nilai = "";
// melakukan pengecekkan apakah tombol submit ditekan, jika iya maka akan menyimpan data input
if (isset($_POST["submit"])) {
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $nilai = $_POST["nilai"];
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /*  */
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Praktikum Modul 4 Soal 1</title>
</head>

<body>
    <!-- membuat sebuah form dengan metode POST yang terdiri dari tiga inputan teks (panjang, lebar, dan nilai) dan sebuah tombol submit. -->
    <form method="POST"> 
        Panjang : <input type="text" name="panjang" value="<?= $panjang; ?>"><br> 
        Lebar   : <input type="text" name="lebar" value="<?= $lebar; ?>"><br> 
        Nilai   : <input type="text" name="nilai" value="<?= $nilai; ?>"><br> 
        <input type="submit" name="submit" value="Cetak"> 
    </form>

    <!-- melakukan pengecekkan apakah tombol submit ditekan, jika iya maka nilai dari inputan teks yang dimasukkan oleh pengguna diolah dengan memecah string nilai ke dalam array -->
    <?php if (isset($_POST["submit"])) {
        $isi = explode(" ", $nilai);
        $panjangNilai = count($isi);
        // pengecekan apakah hasil kali dari nilai $panjang dan $lebar sama dengan jumlah elemen dalam array $isi, jika iya maka array $isi diatur ke dalam sebuah matriks $tampil dan ditampilkan dalam sebuah tabel HTML menggunakan perulangan for
        if ($panjang * $lebar == $panjangNilai) {
            $count = 0;
            for ($i = 0; $i < $panjang; $i++) {
                for ($j = 0; $j < $lebar; $j++) {
                    $tampil[$i][$j] = $isi[$count];
                    $count++;
                }
            }
            echo "<table>";
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . $tampil[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
        } else {
            // Jika hasil kali $panjang dan $lebar tidak sama dengan jumlah elemen dalam array $isi, maka akan ditampilkan pesan "Panjang nilai tidak sesuai dengan ukuran matriks"
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    } ?>
</body>

</html>