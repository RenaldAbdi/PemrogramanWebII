<?php
$imageURL = "https://i.postimg.cc/Yq396zyZ/PASFOTO.jpg";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Praktikan</title>
    <style>
        img {
            max-width: 100%;
            height: 300px;
            border-radius: 6px;
        }

        button {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            background: black;
            font-family: "Montserrat", sans-serif;
            box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            border: none;
        }

        button:after {
            content: " ";
            width: 0%;
            height: 100%;
            background: white;
            position: absolute;
            transition: all 0.4s ease-in-out;
            right: 0;
        }

        button:hover::after {
            right: auto;
            left: 0;
            width: 100%;
        }

        button span {
            text-align: center;
            text-decoration: none;
            width: 100%;
            padding: 10px 15px;
            color: #fff;
            font-size: 1.125em;
            font-weight: 700;
            letter-spacing: 0.3em;
            z-index: 20;
            transition: all 0.3s ease-in-out;
        }

        button:hover span {
            color: black;
            animation: scaleUp 0.3s ease-in-out;
        }

        @keyframes scaleUp {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(0.95);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #222; color: #fff; font-family: Arial, sans-serif;">
    <div class="card text-dark bg-light mb-3 mx-auto" style="max-width: 700px; top: 30px;">
        <div class="row g-0 p-2">
            <div class="col-md-4">
                <img src="<?php echo $imageURL; ?>" alt="Gambar" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <td>Nama Lengkap </td>
                            <td>
                                <p>: M. Renald Abdi</p>
                            </td>
                        </tr>
                        <tr>
                            <td>NIM </td>
                            <td>
                                <p>: 2110817210005</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Asal Prodi </td>
                            <td>
                                <p>: Teknologi Informasi</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Hobi </td>
                            <td>
                                <p>: Mendengarkan Musik</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Skill </td>
                            <td>
                                <p>: Desain Grafis</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <form action="/home/beranda">
        <center>
            <div>
                <button style="position: relative; top: 30px;">
                    <span>Beranda</span>
                </button>
            </div>
        </center>
    </form>
</body>
</html>