<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kall-O Reborn</title>
    <link rel="stylesheet" href="index.css"/>
</head>
<body>
    
    <!-- Header -->
    
    <header>
        <nav>
            <h1 class="logo">
                <a href="index.php">KallBox</a>
            </h1>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="kalori.php">KallBox</a></li>
                <li><a href="history.php">History</a></li>
            </ul>            
            <div class="button-profile">
                <a onclick="toggleMenu()">
                    <img src="image/pp.png" width="60px">
                </a>
            </div>
            <div class="sub-menu-nav" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="image/pp.png">
                        <h2>Profile</h2>
                    </div>
                    <hr>
                    <a href="history.php">My History</a><br><br><br><br><br><br><br><hr>
                    <a href="login.html">Sign Out</a>
                </div>
            </div>
        </nav>
        <script>
            let subMenu = document.getElementById("subMenu");

            function toggleMenu(){
                subMenu.classList.toggle("open-menu");
            }
        </script>
        <div class="header-title">
            <h2>KallBox</h2>
            <p>Mau makan khawatir sama KaloriMu <br>KallBox in aja.</br></p>
            <a href="kalori.php">Kall-in</a>
        </div>

        
    </header>

    <!-- menu -->

    <section id="lib">
        <div class="image-container">
                <div class="image-box">
                    <img src="image/nasi.png">
                    <h3>Nasi</h3>
                    <h5>175Kcal<br>/60 gr</h5>
                </div>
                <div class="image-box">
                    <img src="image/ayam bakar.png">
                    <h3>Ayam Kalkun</h3>
                    <h5>375Kcal<br>/60 gr</h5>
                </div>
                <div class="image-box">
                    <img src="image/daging.png">
                    <h3>Daging Guling</h3>
                    <h5>400Kcal<br>/60 gr</h5>
                </div>
                <div class="image-box">
                    <img src="image/mie.png">
                    <h3>Mie</h3>
                    <h5>155Kcal<br>/60 gr</h5>
                </div>
                <div class="image-box">
                    <img src="image/kentang.png">
                    <h3>Kentang Rebus</h3>
                    <h5>135Kcal<br>/60 gr</h5>
                </div>
                <div class="image-box">
                    <img src="image/roti.png">
                    <h3>Roti</h3>
                    <h5>195Kcal<br>/60 gr</h5>
                </div>
                <div class="image-box">
                    <img src="image/jagung.png">
                    <h3>Jagung</h3>
                    <h5>175Kcal<br>/60 gr</h5>
                </div>
                <div class="image-box">
                    <img src="image/paasta.png">
                    <h3>Pasta</h3>
                    <h5>275Kcal<br>/60 gr</h5>
                </div>
                <div class="image-box">
                    <img src="image/tempe.png">
                    <h3>Tempe</h3>
                    <h5>125Kcal<br>/60 gr</h5>
                </div>
                <div class="image-box">
                    <img src="image/telur.png">
                    <h3>Telur</h3>
                    <h5>160Kcal<br>/60 gr</h5>
                </div>
        </div>

        <!-- Menu 2 -->

        <div class="image-container">
            <div class="image-box">
                <img src="image/roti.png">
                <h3>Roti</h3>
                <h5>195Kcal<br>/60 gr</h5>
            </div>
            <div class="image-box">
                <img src="image/jagung.png">
                <h3>Jagung</h3>
                <h5>175Kcal<br>/60 gr</h5>
            </div>
            <div class="image-box">
                <img src="image/paasta.png">
                <h3>Pasta</h3>
                <h5>275Kcal<br>/60 gr</h5>
            </div>
            <div class="image-box">
                <img src="image/tempe.png">
                <h3>Tempe</h3>
                <h5>125Kcal<br>/60 gr</h5>
            </div>
            <div class="image-box">
                <img src="image/telur.png">
                <h3>Telur</h3>
                <h5>160Kcal<br>/60 gr</h5>
            </div>
            <div class="image-box">
                <img src="image/nasi.png">
                <h3>Nasi</h3>
                <h5>175Kcal<br>/60 gr</h5>
            </div>
            <div class="image-box">
                <img src="image/ayam bakar.png">
                <h3>Ayam Kalkun</h3>
                <h5>375Kcal<br>/60 gr</h5>
            </div>
            <div class="image-box">
                <img src="image/daging.png">
                <h3>Daging Guling</h3>
                <h5>400Kcal<br>/60 gr</h5>
            </div>
            <div class="image-box">
                <img src="image/mie.png">
                <h3>Mie</h3>
                <h5>155Kcal<br>/60 gr</h5>
            </div>
            <div class="image-box">
                <img src="image/kentang.png">
                <h3>Kentang Rebus</h3>
                <h5>135Kcal<br>/60 gr</h5>
            </div>
    </div>
    </section>
    
</body>
</html>