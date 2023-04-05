<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Modul 3 Soal 5</title>
</head>

<body>
    <form action="" method="post">
        <!-- menginputkan data teks yang diinginkan -->
        <input type="text" name="teks" required>
        <!-- tombol submit untuk menyimpan data yang diinput -->
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>
<br>
<?php
// melakukan pengecekkan apakah tombol submit ditekan, jika iya maka akan menyimpan data input
if (isset($_POST['submit'])) {
    // melakukan deklarasi beberapa variabel
    $teks = $_POST['teks'];
    // melakukan deklarasi $panjang yang isinya yaitu panjang string dari $teks
    $panjang = strlen($teks);
    // melakukan deklarasi $input yang akan menyimpan karakter karakter yang ada pada $teks
    $input = str_split($teks);
    $j = 0;
    $k = 0;
    // perulangan for while saat $k kurang dari $panjang, maka akan eksekusi perintah
    while ($k < $panjang) {
        // print huruf kapital tiap huruf pertama dari $teks
        echo strtoupper($input[$j]);
        // perulangan for jika $i kurang dari $panjang, maka akan eksekusi perintah
        for ($i = 1; $i < $panjang; $i++) {
            // print karakter-karakter sisanya dalam huruf kecil
            echo strtolower($input[$j]);
        }
        $k++;
        $j++;
    }
}
?>