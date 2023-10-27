<?php 
    include "koneksi.php";

    
    if(isset($_POST['login'])){

        $satu = $_POST['nama'];
        $dua = $_POST['password'];

        $pertama = mysqli_query($konek, "SELECT * FROM Login;");
        $result = mysqli_fetch_assoc($pertama);
        $nama = $result['nama'];
        $password = $result['password'];



        if($satu == ''  && $dua == ''){
            header("location:kosong.php");
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Silahkan Isi Username dan password Terlebih dahulu")';  
            echo '</script>';  
            
        }else if($satu == ''  ){
            header("location:kosong.php");
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Silahkan Isi Username Terlebih dahulu")';  
            echo '</script>';  
        }
        else if($dua == ''  ){
            header("location:kosong.php");
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Silahkan Isi Password Terlebih dahulu")';  
            echo '</script>';  
        }else if($satu !== $nama){
            header("location:salah.php");
        }else if($satu == $nama && $dua !== $password){
            header("location:salah.php");
        }else if($satu == $nama && $dua == $password){
            header("location:edit/edit.php");
        }
    }
?>