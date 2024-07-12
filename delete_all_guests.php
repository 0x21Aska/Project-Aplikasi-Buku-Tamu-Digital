<?php
include 'connect.php';

$sql = "DELETE FROM table_guests";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: dashboard.php");
exit();
?>