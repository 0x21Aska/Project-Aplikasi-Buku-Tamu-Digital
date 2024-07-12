<?php
include 'connect.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM table_guests WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: dashboard.php"); // Redirect back to the dashboard
    exit();
}
?>