<?php
include "koneksi.php";


if (isset($_POST['kirim'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $WA = $_POST['WA'];
    $IG = $_POST['IG'];
    $pesan = $_POST['pesan'];

    $query = "INSERT INTO `chat` VALUES (NULL, '$nama', '$alamat', '$WA', '$IG', '$pesan');";

    $sql = mysqli_query($konek, $query);

    if ($sql) {
        header("location: index.php");
    } else {
        echo $query;
    }
}
