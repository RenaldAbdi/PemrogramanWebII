<?php
$imageURL = "https://i.postimg.cc/Yq396zyZ/PASFOTO.jpg";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <Style>
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

        .card {
            width: 190px;
            height: 400px;
            background: white;
            padding: .4em;
            border-radius: 6px;
        }

        .card-image {
            background-color: rgb(236, 236, 236);
            width: 100%;
            height: 60%;
            border-radius: 6px 6px 0 0;
        }

        .card-image:hover {
            transform: scale(0.98);
        }

        .category {
            text-transform: uppercase;
            font-size: 15px;
            font-weight: 600;
            color: rgb(63, 121, 230);
            padding: 10px 7px 0;
        }

        .category:hover {
            cursor: pointer;
        }

        .heading {
            font-weight: 600;
            color: rgb(88, 87, 87);
            padding: 7px;
        }

        .heading:hover {
            cursor: pointer;
        }
    </Style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #222; color: #fff; font-family: Arial, sans-serif;">

    <div class="card mx-auto mt-5">
        <div class="card-image">
            <img class="card-image" src="<?php echo $imageURL; ?>" alt="Gambar" style="max-width: 100%; height: 240px;">
        </div>
        <form action="/home/biodata">
            <center>
                <div>
                    <button style="position: relative; top: 30px;">
                        <span>Biodata</span>
                    </button>
                </div>
            </center>
        </form>
        <center>
            <p class="heading" style="position: relative; top: 40px;">M. Renald Abdi<br>(2110817210005)</p>
        </center>
</body>

</html>