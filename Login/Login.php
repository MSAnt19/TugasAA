<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" 
  <link rel="stylesheet" href="Login.css">
  <title>Login_Page</title>
</head>

<body>
  <div class="container">
    <div class="Logo">
      <img src="Logo.png" alt="" srcset="" class="lgLog">
      <div class="lg-txt">
        <h1>Hallo BOS.!!!</h1>
        <h2>Apa Kabar.?</h2>
        <h3>Apani yang mau di ganti.?</h3>
      </div>
    </div>
    <div style="width: 50%;">
      <div class="login">
        <h2 style="padding-top: 80px; padding-bottom: 20px;">LOGIN DULU BOS.</h2>

        <form action="lgp.php" method="post" style="margin: 10px;">
          <div style="margin: 20px;">
            <label for="nama">Nama Anda : </label>
            <input type="text" id="nama" name="nama" placeholder="Muhamad Sarifudin" style="width: 50%; padding: 3px;">
          </div>
          <div style="margin: 20px;">
            <label for="password" ><Password> Password : </label>
            <input type="password" id="password" name="password" placeholder="******" style="width: 50%; padding: 3px;">
          </div>
          <button type="submit" name="login" value="login" class="btnLog">Login</button>
        </form>
      </div>
    </div>
    
  </div>
</body>

</html>