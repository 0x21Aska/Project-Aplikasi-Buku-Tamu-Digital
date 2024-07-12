<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $jml_tamu = $_POST['jml_tamu'];
    $doa_ucapan = $_POST['doa_ucapan'];
    $kehadiran = $_POST['kehadiran'];

    $sql = "INSERT INTO table_guests (nama, telp, jml_tamu, doa_ucapan, kehadiran) VALUES ('$nama', '$telp', '$jml_tamu', '$doa_ucapan', '$kehadiran')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil dibuat";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: dashboard.php");
    exit();
}
?>