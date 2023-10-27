<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="edit.css">
</head>

<?php
    include 'koneksi.php';

    $queryhome = "SELECT * FROM coba WHERE id = '1'; ";
    $queryabout = "SELECT * FROM coba WHERE id = '2'; ";
    $queryeduc = "SELECT * FROM coba WHERE id = '3'; ";

    $sqlA = mysqli_query($konek, $queryhome);
    $sqlB = mysqli_query($konek, $queryabout);
    $sqlC = mysqli_query($konek, $queryeduc);

    $resultA = mysqli_fetch_assoc($sqlA);
    $resultB = mysqli_fetch_assoc($sqlB);
    $resultC = mysqli_fetch_assoc($sqlC);

    $Asatu = $resultA['satu'];
    $Adua = $resultA['dua'];
    $Atiga = $resultA['tiga'];
    $Aempat = $resultA['empat'];

    $Bsatu = $resultB['satu'];
    $Bdua = $resultB['dua'];
    $Btiga = $resultB['tiga'];
    $Bempat = $resultB['empat'];

    $Csatu = $resultC['satu'];
    $Cdua = $resultC['dua'];
    $Ctiga = $resultC['tiga'];
    $Cempat = $resultC['empat'];
?>


<body>
    <header>
        <nav class="navigation">
            <a href="edit.php">EDIT</a>
            <a href="inbox.php">INBOX</a>
        </nav>
        <button class="keluar"><a href="/TugasAA/index.php">Menu Utama</a></button>
    </header>
    <form method="POST" action="proses.php">
        <div class="container">
            <div class="wraper" class="a">
                <h2 style="margin-bottom: 15px; margin-top: 15px;">HOME</h2>
                <label for="Ahome">Kata Satu : </label><br>
                <textarea name="Ahome" id="Ahome" cols="35" rows="2"><?php echo $Asatu ?></textarea>
                <br><label for="Bhome">Kata Dua : </label><br>
                <textarea name="Bhome" id="Bhome" cols="35" rows="2"><?php echo $Adua ?></textarea>
                <br><label for="Chome"> Kata Tiga : </label><br>
                <textarea name="Chome" id="Chome" cols="35" rows="2"><?php echo $Atiga ?></textarea>
                <br><label for="Dhome">Kata Empat : </label><br>
                <textarea name="Dhome" id="Dhome" cols="35" rows="2"><?php echo $Aempat ?></textarea>
            </div>
            <div class="wraper" class="a">
                <h2 style="margin-bottom: 15px; margin-top: 15px;">ABOUT</h2>
                <label for="Aabout">Nama : </label><br>
                <textarea name="Aabout" id="Aabout" cols="35" rows="2"><?php echo $Bsatu ?></textarea>
                <br><label for="Babout">Tempat Lahir : </label><br>
                <textarea name="Babout" id="Babout" cols="35" rows="2"><?php echo $Bdua ?></textarea>
                <br><label for="Cabout">Tanggal Lahir : </label><br>
                <textarea name="Cabout" id="Cabout" cols="35" rows="2"><?php echo $Btiga ?></textarea>
                <br><label for="Dabout">Alamat : </label><br>
                <textarea name="Dabout" id="Dabout" cols="35" rows="2"><?php echo $Bempat ?></textarea>
            </div>
            <div class="wraper" class="a">
                <h2 style="margin-bottom: 15px; margin-top: 15px;">EDUCATION</h2>
                <label for="Aeduc">SD : </label><br>
                <textarea name="Aeduc" id="Aeduc" cols="35" rows="2"><?php echo $Csatu ?></textarea>
                <br><label for="Beduc">SMP : </label><br>
                <textarea name="Beduc" id="Beduc" cols="35" rows="2"><?php echo $Cdua ?></textarea>
                <br><label for="Ceduc">SMA : </label><br>
                <textarea name="Ceduc" id="Ceduc" cols="35" rows="2"><?php echo $Ctiga ?></textarea>
                <br><label for="Deduc">Sarjana : </label><br>
                <textarea name="Deduc" id="Deduc" cols="35" rows="2"><?php echo $Cempat ?></textarea>
            </div>
        </div>
        <div class="btn">
            <button class="btnLog" type="submit" name="aksi" onclick="return confirm('Apakah Anda Yakin Ingin Mengedit data ini.???')">Edit</button>
        </div>
    </form>
</body>

</html>