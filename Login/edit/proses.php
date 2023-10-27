<?php

include 'koneksi.php';

if (isset($_POST['aksi'])) {
    $Ahome = $_POST['Ahome'];
    $Bhome = $_POST['Bhome'];
    $Chome = $_POST['Chome'];
    $Dhome = $_POST['Dhome'];

    $Aabout = $_POST['Aabout'];
    $Babout = $_POST['Babout'];
    $Cabout = $_POST['Cabout'];
    $Dabout = $_POST['Dabout'];

    $Aeduc = $_POST['Aeduc'];
    $Beduc = $_POST['Beduc'];
    $Ceduc = $_POST['Ceduc'];
    $Deduc = $_POST['Deduc'];

    $queryhome = "UPDATE coba SET satu='$Ahome', dua='$Bhome', tiga='$Chome' , empat='$Dhome' WHERE id = '1'; ";
    $queryabout = "UPDATE coba SET satu='$Aabout', dua='$Babout', tiga='$Cabout' , empat='$Dabout' WHERE id = '2'; ";
    $queryeduc = "UPDATE coba SET satu='$Aeduc', dua='$Beduc', tiga='$Ceduc' , empat='$Deduc' WHERE id = '3'; ";

    $sqlA = mysqli_query($konek, $queryhome);
    $sqlB = mysqli_query($konek, $queryabout);
    $sqlC = mysqli_query($konek, $queryeduc);

    // if($sqlA && $sqlB && $sqlC){
    //     echo "data teredit";
    // }else{
    //     echo $query;
    // }
}
if(isset($_GET['hapus'])){
    $id= $_GET['hapus'];
    $query = "DELETE FROM chat WHERE id = '$id';";
    $sql = mysqli_query($konek, $query);

    if ($sql) {
        header("location: inbox.php");
    } else {
        echo $query;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit_Berhasil</title>
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
        <h1>DATA SUDAH DI-EDIT BOS</h1>
        <h2>MAU KE-HALAMAN MANA NI.?</h2>
        <div class="btn">
            <button class="btnLog"><a href="edit.php">Edit</a></button>
            <button class="btnLog"><a href="/TugasAA/index.php">Menu Utama</a></button>
        </div>
    </div>
</body>
</html>