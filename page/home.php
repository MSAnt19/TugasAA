<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
    <?php
        $pertama = mysqli_query($konek, "SELECT * FROM coba WHERE id ='1' ;");
        $result = mysqli_fetch_assoc($pertama);
    ?>

<body>
    <div class="salam">
        <h3><?php echo $result['satu']; ?></h3>
        <h1><?php echo $result['dua']; ?></h1>
        <h3><?php echo $result['tiga']; ?></h3>
        <p><?php echo $result['empat']; ?></p>
    </div>
    <style>
        .salam {
            margin-top: 110px;
            color: white;
            color: rgba(255, 255, 255, 0.849);
        }

        h3 {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.849);
        }

        h1 {
            font-size: 50px;
        }

        p {
            font-size: 15px;
            margin-top: 10px;
        }
    </style>
</body>

</html>