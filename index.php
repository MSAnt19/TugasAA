<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal_Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background: url('Background.jpg') no-repeat; background-size: cover; background-position: center;">
    <?php
    include "koneksi.php";
    include "function.php";
    ?>
    <header>
        <div class="logo"><a href="Login/Login.php"><img src="Logo.png" alt="" class="logos"></a>M.Sarifudin</div>
        <nav class="navigation">
            <a href="index.php?m=home">Home</a>
            <a href="index.php?m=about">About</a>
            <a href="index.php?m=education">Education</a>
            <a href="index.php?m=chat">Chat</a>
        </nav>
    </header>
    <div class="content">
        <div class="me">
            <img src="Me.png" alt="">
        </div>
        <div class="isian">
            <?php
            //menampilkan content yang diinginkan
            $m = $_GET['m'] ?? '0';
            $file = content($m);
            include "page/$file";
            ?>
        </div>
    </div>
    <div class="footer">
        Copyright &copy; 2023 - Muhamad Sarifudin</a>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>