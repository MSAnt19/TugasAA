<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah_Login</title>
    <link rel="stylesheet" href="edit.css">
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flexbox;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('Background.jpg') no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container {
            display: block;
            width: 100%;
            height: 100vh;
            padding: 5%;
            color: white;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        .btn {
            margin-top: 20px;
            width: 100%;
            display: flex;
        }

        .btnLog {
            padding: 10px;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 200px;
            background-color: rgb(0, 0, 0);
            border: 2px solid #ffffff;
            border-radius: 10%;
            cursor: pointer;
            transition-duration: .5s;
            -webkit-border-radius: 10%;
            -moz-border-radius: 10%;
            -ms-border-radius: 10%;
            -o-border-radius: 10%;
        }

        .btnLog a {
            color: rgb(255, 255, 255);
            font-size: 20px;
            text-decoration: none;
        }

        .btnLog:hover {
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            transition-duration: .5s;
        }

        .btnLog a:hover {
            color: rgb(0, 0, 0);
        }
    </style>

    <div class="container">
        <img src="Logo.png" alt="" srcset="" class="lgLog" style="width: 300px;">
        <h2>COBA CEK LAGI</h2>
        <h1>ADA YANG SALAH NI BOS</h1>
        <h2>COBA LAGI YA.!!!</h2>
        <div class="btn">
            <button class="btnLog"><a href="Login.php">Balik Ya.!!</a></button>
        </div>
    </div>
</body>
</html>