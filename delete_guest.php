<?php
include 'connect.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM table_guests WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Berhasil dihapus";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: dashboard.php"); // kembali ke dashboard
    exit();
}
?>