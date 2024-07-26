<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>front</title>
    <link rel="stylesheet" href="./css/styleIndex.css">


</head>
<body>

    <!-- SECTION HEADER / NAVIGASI -->
    <header>
        <div class="main-container">
            <div class="group-navigasi">

                <div class="logoAtHeader">
                    <a href="">
                        <img src="./assets/logo.png" alt="logo" style="width: 150px;">
                    </a>
                </div>

                <div class="sec-menus">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="aboutPage.php">About</a></li>
                            <li><a href="guestFormPage.php">Guest Form</a></li>
                            <li><a class="logging" href="loginPage.php" style="color: maroon;">Login</a></li>
                        </ul>
                    </nav>
                </div>


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

    
    <!-- SECTION FRONT IMAGE -->
    <div class="frontIMG">
        <img src="./assets/banner-happy.png" alt="banner">
    </div>


    <!-- SECTION ABOUT -->
    <section id="about">
        <div class="main-container">
            <div class="group-about2">
                <div class="front-img2">
                    <img class="gambarDepan" src="./assets/img-about.jpg" alt="gambar" style="border-radius: 12px;">
    
                </div>
    
                <div class="group-deskripsi">
                    <div class="deskripsi">
                        <article>
                            <h3>About</h3>
                            <p>Selamat datang di pesta ulang tahun kami! Pada 31 Desember 2024, kami akan mengadakan perayaan di salah satu hotel mewah Depok untuk merayakan momen spesial ini bersama keluarga dan teman-teman.</p>
                            <br>
                            <p>Acara ini akan penuh dengan hiburan menarik, makanan lezat, dan tema "Glamour and Glitz". Siapkan pakaian terbaik Anda dan bergabunglah dengan kami untuk malam penuh kenangan indah, tawa, dan kebahagiaan. Kami sangat menantikan kehadiran Anda di acara spesial ini!</p>
    
                            <a href="guestFormPage.php">
                                <button class="btn">Checkin</button>
                            </a>
    
                        </article>
                    </div>
                </div>
    
            </div>
        </div>
    </section>


    <!-- SECTION DETAIL -->
    <section id="detail">
        <div class="main-container">
            <div class="groupDetail">
                <div class="group-detail2">
                    <div class="group-text">
                        <article>
                            <h2>WHEN & WHERE</h2>
                            <p>Kami dengan senang hati mengundang Anda untuk menghadiri pesta ulang tahun kami pada tanggal 31 Desember 2024. Acara ini akan berlangsung di Hotel mewah bernama Grand Building XYZ Depok, mulai pukul 18:00 WIB. Jangan lewatkan malam penuh keseruan dan kebahagiaan ini!</p>
                        </article>
                    </div>

                    <div class="group-icons">
                        <div class="tanggal">
                            <article>
                                <img src="./assets/date.svg" alt="date">
                                <!-- style="width: 32px; height: 32px;" -->
                                <p>Date: Dec, 31st 2024</p>
                                <p>Time: 6 PM - Selesai WIB</p>
                            </article>
                        </div>

                        <div class="lokasi">
                            <article>
                                <img src="./assets/map.svg" alt="map">
                                <!-- style="width: 32px; height: 32px;" -->
                                <p>Location: Jalan Margonda Raya 100, Depok</p>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION RANDOM IMAGE -->
    <div class="randomIMG">
        <img src="./assets/img-random.jpg" alt="randomIMG">
    </div>


    <!-- SECTION GALLERY -->
    <section id="gallery">
        <div class="main-container">
            <div class="group-gallery">
                <h3>Gallery</h3>

                <div class="group-cards">
                    <div class="card1">
                        <img src="./assets/img-indoorBuilding.jpg" alt="card1">
                        <!-- style="width: 100%; height: 220px; -->
                    </div>

                    <div class="card2">
                        <img src="./assets/img-cake.jpg" alt="card2">
                        <!-- " style="width: 310px; height: 350px; -->
                    </div>

                    <div class="card3">
                        <img src="./assets/img-entranceBalloon.jpg" alt="card3">
                        <!-- " style="width: 310px; height: 350px; -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SECTION GMAPS -->
    <section id="gmaps">

        <iframe width="100%" height="350" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=6%C2%B022'09.7%22S%20106%C2%B049'59.5%22E&key=AIzaSyDFXp3GHA9925eb5vvWVD8yWaofY_Z5KLA"></iframe>

    </section>


    <!-- SECTION FOOTER -->
    <section id="footer">
        <div class="main-container">
            <div class="group-footer">
                <div class="logoAtFooter">
                    <a href="">
                        <img src="./assets/logo.png" alt="logo" style="width: 150px;">
                    </a>
                </div>

                <div class="footer-nav">
                    <nav>

                        <ul>
                            <li><a class="right-nav" href="index.php">Home</a></li>
                            <li><a class="right-nav" href="aboutPage.php">About</a></li>
                            <li><a class="right-nav" href="guestFormPage.php">Guest Form</a></li>
                            <!-- <li><a class="right-nav" href="login">Login</a></li> -->
                        </ul>

                    </nav>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>
