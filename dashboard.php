<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: loginPage.php");
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>
    <link rel="stylesheet" href="./css/styleDashboardPage.css">
</head>
<body>

    <!-- SECTION SIDEBAR -->
    <div class="main-container">
        <div class="sidebar">
            <h1>MyBday</h1>
            <nav>
                <ul>
                    <li><a href="dashboard.php">Buku Tamu</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>

        <!-- SECTION BODY -->
        <div class="main-content">
            <header>
                <h2>Data Tamu</h2>
                <div class="button-group">
                    <form method="POST" action="export_csv.php" style="display:inline;">
                        <button type="submit" class="export-btn">Export to CSV</button>
                    </form>

                    <form id="konfirmDeleteForm"method="POST" action="delete_all_guests.php" style="display:inline;">
                        <button type="button" class="delete-all" onclick="confirmDelete()">Delete all</button>
                    </form>
                </div>
            </header>

            <!-- Menerima data dari form create_guest > masuk ke db > data bertambah -->
            <form method="POST" action="create_guest.php">
                <input class="CG" type="text" name="nama" placeholder="Nama" required>
                <input class="CG" type="text" name="telp" placeholder="No Telepon" required>
                <input class="CG" type="number" name="jml_tamu" min="0" placeholder="Jumlah Tamu" required>
                <input class="CG" type="text" name="doa_ucapan" placeholder="Kartu Ucapan" required>
                <input type="hidden" name="kehadiran" value="Hadir">
                <button class="BTT" type="submit" style="font-size: 14px; color: white;">Tambah Tamu</button>
            </form>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Telepon</th>
                        <th>Jumlah Tamu</th>
                        <th>Kartu Ucapan dan Doa</th>
                        <th>Kehadiran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'connect.php';

                    $sql = "SELECT * FROM table_guests";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['telp'] . "</td>";
                            echo "<td>" . $row['jml_tamu'] . "</td>";
                            echo "<td>" . $row['doa_ucapan'] . "</td>";
                            echo "<td>" . $row['kehadiran'] . "</td>";
                            echo "<td>
                                    <form method='POST' action='update_guest.php' style='display:inline;'>
                                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                                        <input type='text' name='nama' value='" . $row['nama'] . "'>
                                        <input type='text' name='telp' value='" . $row['telp'] . "'>
                                        <input type='number' name='jml_tamu' value='" . $row['jml_tamu'] . "' min='0'>
                                        <input type='text' name='doa_ucapan' value='" . $row['doa_ucapan'] . "'>
                                        <input type='text' name='kehadiran' value='" . $row['kehadiran'] . "'>
                                        <button type='submit' class='update-btn'>✏️</button>
                                    </form>
                                    <form method='POST' action='delete_guest.php' style='display:inline;'>
                                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                                        <button type='submit' class='delete-btn'>🗑️</button>
                                    </form>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                    }

                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete() {
            if(confirm("Apakah anda yakin delete all data?")) {
                document.getElementById('konfirmDeleteForm').submit();
            }
        }
    </script>

</body>
</html>