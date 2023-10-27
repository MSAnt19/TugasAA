<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INBOX</title>
    <link rel="stylesheet" href="inbox.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<body>

    <?php

    include 'koneksi.php';

    $query = "SELECT * FROM chat;";
    $sql = mysqli_query($konek, $query);

    $no = 0;
    ?>

    <header>
        <nav class="navigation">
            <a href="edit.php.">EDIT</a>
            <a href="inbox.php">INBOX</a>
        </nav>
        <button class="keluar"><a href="/TugasAA/index.php">Menu Utama</a></button>
    </header>
    <div class="container">
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No_WA</th>
                <th>IG</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
            <?php while ($result = mysqli_fetch_assoc($sql)) {
            ?>
                <tr>
                    <td><?php echo ++$no; ?></td>
                    <td><?php echo $result['nama'] ?></td>
                    <td><?php echo $result['alamat'] ?></td>
                    <td><?php echo $result['WA'] ?></td>
                    <td><?php echo $result['IG'] ?></td>
                    <td><?php echo $result['pesan'] ?></td>
                    <td><a href="proses.php?hapus=<?php echo $result['id'] ?>" type="button" class="material-symbols-outlined" style="cursor: pointer; text-decoration: none; color: rgb(255, 255, 255);">delete</a></td>
                </tr>
            <?php
                }
            ?>
        </table>
    </div>
</body>

</html>