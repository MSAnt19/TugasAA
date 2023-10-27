<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>

<body>
    <div class="wraper">
        <h3>Kenalan Yuk</h3>
        <form action="kirim.php" method="post" style="margin: 10px;">
            <div style="margin: 20px;">
                <label for="nama">Nama Anda : </label>
                <input type="text" id="nama" name="nama" placeholder="Muhamad Sarifudin" style="width: 50%; padding: 3px; margin-left: 55px;">
            </div>
            <div style="margin: 20px;">
                <label for="alamat">Alamat : </label>
                <input type="text" id="alamat" name="alamat" placeholder="Wonosobo" style="width: 50%; padding: 3px; margin-left: 90px;">
            </div>
            <div style="margin: 20px;">
                <label for="WA">Nomer WhatsApp : </label>
                <input type="text" id="WA" name="WA" placeholder="082138985732" style="width: 50%; padding: 3px; margin-left: 5px;">
            </div>
            <div style="margin: 20px;">
                <label for="IG">Instagram : </label>
                <input type="text" id="IG" name="IG" placeholder="@AuX" style="width: 50%; padding: 3px; margin-left: 65px;">
            </div>
            <div style="margin: 20px;">
                <label for="pesan">Pasan : </label>
                <input type="text" id="pesan" name="pesan" placeholder="Halo.!" style="width: 50%; padding: 3px; margin-left: 100px;">
            </div>
            <button type="submit" name="kirim" value="kirim" class="btnLog">Kirim</button>
        </form>
    </div>
    </div>
    <style>
        .wraper {
            display: flexbox;
            justify-content: center;
            align-items: center;
            width: 400px;
            height: 400px;
            background: transparent;
            backdrop-filter: blur(10px);
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10%;
            border: 2px solid rgba(255, 255, 255, 0.5);
            box-shadow: 10px 10px 5px rgb(0, 0, 0, .5);
            color: white;
        }

        h3 {
            font-size: 35px;
            color: rgba(255, 255, 255, 0.849);
            margin-top: 10px;
            margin-bottom: 20px;
            margin-left: 25px;
        }

        form {
            margin: 10px;
        }

        .btnLog {
            padding: 5px;
            margin-top: 10px;
            width: 100px;
            margin-left: 250px;
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
            font-size: 15px;
            text-decoration: none;
            border: 2px solid #ffffff;
            border-radius: 10%;
            cursor: pointer;
            transition-duration: .5s;
        }

        .btnLog:hover {
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            transition-duration: .5s;
        }
    </style>
</body>

</html>