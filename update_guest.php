<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $jml_tamu = $_POST['jml_tamu'];
    $doa_ucapan = $_POST['doa_ucapan'];
    $kehadiran = $_POST['kehadiran'];

    $sql = "UPDATE table_guests SET nama='$nama', telp='$telp', jml_tamu='$jml_tamu', doa_ucapan='$doa_ucapan', kehadiran='$kehadiran' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location: dashboard.php");
    exit();
}
?>