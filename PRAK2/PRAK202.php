<?php
    // Mendeklarasikan beberapa variabel
    $pemberitahuannama = $pemberitahuannim = $result = $pemberitahuanjenisk=""; 
    $nama = $nim= $jenisk = "";  

    // pengkondisian yang akan melakukan pengecekkan apakah tombol submit ditekan
    if (isset($_POST['submit'])) {     
        // pengkondisian apabila nama tidak diinput maka akan muncul pemberitahuan, jika tidak akan menyimpan data input nama
        if (empty($_POST['nama'])) {         
            $pemberitahuannama = "Nama tidak boleh kosong";     
        } else { 
            $nama = cek_input($_POST['nama']);
        }     
        // pengkondisian apabila nim tidak diinput maka akan muncul pemberitahuan, jika tidak akan menyimpan data input nim
        if (empty($_POST['nim'])) {
            $pemberitahuannim = "Nim tidak boleh kosong";     
        } else {         
            $nim = cek_input($_POST['nim']);     
        }     
        // pengkondisian apabila jenis kelamin tidak diinput maka akan muncul pemberitahuan, jika tidak akan menyimpan data input jenis kelamin
        if (empty($_POST['jenisk'])) {         
            $pemberitahuanjenisk = "Jenis Kelamin tidak boleh kosong";     
        } else {         
            $jenisk = cek_input($_POST['jenisk']);     
        } 
    }

    // membuat fungsi yang digunakan untuk membersihkan input dari spasi dan karakter-karakter khusus menggunakan fungsi PHP seperti trim(), stripslashes(), dan htmlspecialchars()
    function cek_input($data) {     
        $data = trim($data);     
        $data = stripslashes($data);     
        $data = htmlspecialchars($data);     
        return $data; 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Modul 2 Soal 2</title>
    <style>
        /* membuat style untuk class error, sehingga muncul berwarna merah */
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <form method="POST">
        <!-- melakukan penginputan data nama, nim dan jenis kelamin. jika data kosong, maka akan muncul pemberitahuan error -->
        Nama         : <input type="text" name="nama" value="<?= $nama ?>"><span class="error">* <?=$pemberitahuannama;?></span></br>
        NIM          : <input type="text" name="nim" value="<?= $nim ?>"><span class="error">* <?=$pemberitahuannim;?></span></br>
        Jenis Kelamin: <span class="error">* <?=$pemberitahuanjenisk;?></span></br>
        <input type="radio" name="jenisk" value="Laki-Laki"><?php if (isset ($_POST["jenisk"]) && $_POST["jenisk"] == "Laki-Laki")?> Laki-Laki</br>
        <input type="radio" name="jenisk" value="Perempuan"><?php if (isset ($_POST["jenisk"]) && $_POST["jenisk"] == "Perempuan")?> Perempuan</br>
        <input type="submit" name="submit" value="SUBMIT">
    </form></br>

    <?php
        // pengkondisian jika tidak ada input data yang kosong, maka akan menampilkan semua data yang telah diinputkan dibawah form
        if(!empty($nama) && !empty($nim) && !empty($jenisk)){         
            echo "$nama <br>";         
            echo "$nim <br>";         
            echo "$jenisk <br>";     
        }
    ?>
</body>
</html>