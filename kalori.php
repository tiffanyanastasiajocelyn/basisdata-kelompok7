<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="kalori.css">
    <style>
        @font-face {
            font-family: font1;
            src: url(font/Mont-HeavyDEMO.otf);
        }
        @font-face {
            font-family: font2;
            src: url(font/Mont-ExtraLightDEMO.otf);
        }
    </style>
</head>
<body>
    <div class="input">
        <h1>Form Makanan</h1>
        <form action="submit.php" method="POST">
            <div class="box-input">
                <h2>Kamu makan apa nih?</h2>
                <input type="text" name="nama_makanan">
            </div>
            <div class="box-input">
                <h2>Berapa kalorinya?</h2>
                <input type="number" name="kalori">
            </div>
            <div class="box-input">
                <h2>Makannya kapan?</h2>
                <input type="date" name="tanggal" class="tanggal">
            </div>
            <a href="index.php">
                <button type="submit" name="submit" class="submit">Submit</button>
            </a>
        </form>
    </div>
    <div class="footer">
        <a href="index.php">
            <img class="tombol-gohome" src="image/Go Home.png" height="18px">
        </a>
        
    </div>
</body>
</html>