<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
</head>

<?php
    $pertama = mysqli_query($konek, "SELECT * FROM coba WHERE id ='3' ;");
    $result = mysqli_fetch_assoc($pertama);
?>

<body>
    <div class="wraper">
        <h3>Riwayat Sekolah</h3>
        <ol>
            <li><?php echo $result['satu'] ?></li>
            <li><?php echo $result['dua'] ?></li>
            <li><?php echo $result['tiga'] ?></li>
            <li><?php echo $result['empat'] ?></li>
        </ol>
    </div>
    <style>
        .wraper {
            display: flexbox;
            justify-content: center;
            align-items: center;
            position: relative;
            width: 400px;
            height: 400px;
            background: transparent;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
            margin-left: 125px;
            margin-top: 30px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            -ms-border-radius: 20px;
            -o-border-radius: 20px;
        }

        h3 {
            font-size: 35px;
            color: rgba(255, 255, 255, 0.849);
            margin: 15px;
        }
        
        ol {
            list-style-type: none;
        }

        ol li {
            font-size: 20px;
            padding-top: 5px;
            margin-left: 20px;
        }
    </style>
</body>

</html>