<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleAboutPage.css">
    <title>About</title>
</head>
<body>

<!-- SECTION HEADER / NAVIGASI -->
    <header>
        <div class="main-container">
            <div class="group-nav">
                <div class="logo">
                    <a href="">
                        <img src="./assets/logo.png" alt="logo">
                    </a>
                </div>

                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutPage.php">About</a></li>
                        <li><a href="guestFormPage.php">Guest Form</a></li>
                        <li><a class="logging" href="loginPage.php" style="color: maroon;">Login</a></li>
                    </ul>
                </nav>

                <div class="group-sidebar">
                    <input type="checkbox" id="toggle">
                    <label class="hamburger-menu" for="toggle">&#9776;</label>

                    <div class="sidebar">
                        <!-- <label class="closebtn" for="toggle"></label> -->
                        <a href="index.php">Home</a>
                        <a href="aboutPage.php">About</a>
                        <a href="guestFormPage.php">Guest Form</a>
                        <a href="loginPage.php">Login</a>
                    </div>
                </div>

            </div>

        </div>

    </header>

    <!-- SECTION ABOUT -->
    <div class="main-container">
        <div class="group-about2">
            <div class="front-img2">
                <img class="gambarDepan" src="./assets/img-aboutV2.jpg" alt="gambar" style="border-radius: 12px;">
                <!-- style="width: 600px;" height="420px" -->

            </div>

            <div class="group-deskripsi">
                <div class="deskripsi">
                    <article>
                        <h3 style="font-size: 18px;">About</h3>
                        <p>Selamat datang di perayaan ulang tahun ke-17 Arlene Grace! Arlene adalah seorang remaja berbakat yang penuh dengan semangat dan keceriaan. Tahun ini, Arlene berencana merayakan momen istimewa ini bersama keluarga dan teman-teman tercinta di Hotel XYZ Depok pada tanggal 31 Desember 2024.</p>
                        <br>
                        <p>Arlene ingin berbagi kebahagiaan dan kenangan indah di malam yang penuh kegembiraan ini. Dengan tema "Glamour and Glitz", Arlene mengundang Anda untuk bergabung dalam acara yang tak terlupakan, yang akan dipenuhi dengan hiburan, makanan lezat, dan suasana yang menyenangkan. Mari rayakan bersama Arlene dan buat kenangan indah di hari spesialnya ini!</p>

                        <a href="guestFormPage.php">
                            <button class="btn">Checkin</button>
                        </a>

                    </article>
                </div>
            </div>

        </div>
    </div>


    <!-- SECTION FOOTER -->
    <footer>
        <div class="main-container">
            <div class="group-footer">

                <div class="logo">
                    <a href="">
                        <img src="./assets/logo.png" alt="logo">
                    </a>
                </div>

                <div class="footer-nav">
                    <nav>

                        <ul>
                            <li><a class="right-nav" href="index.php">Home</a></li>
                            <li><a class="right-nav" href="aboutPage.php">About</a></li>
                            <li><a class="right-nav" href="guestFormPage.php">Guest Form</a></li>
                            <!-- <li><a class="right-nav" href="#login">Login</a></li> -->
                        </ul>

                    </nav>
                </div>

            </div>
        </div>
    </footer>
    
</body>
</html>