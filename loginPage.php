<!-- SECTION LOGIN -->
<?php 
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query_sql = "SELECT * from _admin_
                    WHERE username = '$username'
                        AND password = '$password'";

    $output = mysqli_query($conn, $query_sql);

    if(mysqli_num_rows($output) > 0) {
        $_SESSION['username'] = $username; // Simpan username ke dalam session
        header("Location: dashboard.php");
    }
    else {
        echo "<script>
                alert('Username atau Password Anda Salah. Silakan Coba Login Kembali')
                    </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styleLoginPage.css">
    <title>Login</title>
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
                        <li><a class="logging" href="#login" style="color: maroon;">Login</a></li>
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

    <!-- SECTION FORM LOGIN -->
    <section id="login">
        <div class="group-login">
            <div class="login-header">
                <h2>Welcome Back!</h2>
                <p style="font-size: 12px;">Please sign in to continue</p>
            </div>

            <div class="form">
                <form action="" method="post">
                    <div class="group-labeling">
                        <label for="username">Username</label><br>
                        <input type="text" id="username" name="username" required><br>
                    </div>
                    <br>

                    <div class="group-labeling">
                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="password" required><br>
                    </div>

                    <a href="">
                        <button class="btn">Login</button>
                    </a>
                
                
                </form>
            </div>
        </div>
    </section>

    
</body>
</html>