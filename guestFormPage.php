<!-- SECTION KIRIM -->
<?php

include 'connect.php';

if (isset($_POST['buttonSubmit'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $jml_tamu = $_POST['jml_tamu'];
    $doa_ucapan = $_POST['doa_ucapan'];
    $kehadiran = $_POST['kehadiran']; // Input tersembunyi untuk kehadiran

    // Cek apakah data sudah ada
    $checkQuery = "SELECT * FROM table_guests WHERE nama='$nama' AND telp='$telp'";
    $result = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($result) == 0) {
        // Jika data belum ada, lakukan INSERT
        $insertQuery = "INSERT INTO table_guests (nama, telp, jml_tamu, doa_ucapan, kehadiran) VALUES ('$nama', '$telp', '$jml_tamu', '$doa_ucapan', '$kehadiran')";
        mysqli_query($conn, $insertQuery);
    } else {
        echo "Data sudah ada.";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleGuestFormPage.css">
    <title>Guest Form</title>
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

    <!-- SECTION GUEST FORM -->
    <div class="main-container">
        <div class="group-formulir">
            <div class="front-img2">
                <img class="gambarDepan" src="./assets/img-guest.jpg" alt="gambar" style="border-radius: 12px;">
                <!-- style="width: 600px;" height="420px" -->

            </div>

            <div class="form">
                <h2>Formulir Tamu</h2><br>
                <form action="" method="post">
                    <div class="group-labeling">
                        <label for="nama">Nama</label><br>
                        <p style="font-size: 13px;">(Jika membawa teman/pasangan harap ditulis seperti contoh. cth: rudi & istri)</p>
                        <input type="text" id="nama" name="nama" required><br>
                    </div>
                    <br>
                    <div class="group-labeling">
                        <label for="telp">Nomor Telepon</label><br>
                        <input type="tel" id="telp" name="telp" required><br>
                    </div>
                    <br>
                    <div class="group-labeling">
                        <label for="jml_tamu">Jumlah Tamu</label><br>
                        <input type="number" id="jml_tamu" name="jml_tamu" min="0"><br>
                    </div>
                    <br>
                    <div class="group-labeling">
                        <label for="doa_ucapan">Kartu Doa & Ucapan</label><br>
                        <textarea id="doa_ucapan" name="doa_ucapan"></textarea><br><br>
                    </div>
                    <br>
                    <input type="hidden" name="kehadiran" value="Hadir"> <!-- Input tersembunyi untuk kehadiran -->
                    <div class="iniButton">
                        <button type="submit" class="btn" name="buttonSubmit">Submit</button>
                    </div>
                </form>

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