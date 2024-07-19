<?php
include 'connect.php';

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data_tamu.csv');

$output = fopen('php://output', 'w');
fputcsv($output, array('No', 'Nama', 'No Telepon', 'Jumlah Tamu', 'Kartu Ucapan', 'Kehadiran'));

$sql = "SELECT * FROM table_guests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, array($no++, $row['nama'], $row['telp'], $row['jml_tamu'], $row['doa_ucapan'], $row['kehadiran']));
    }
}

fclose($output);
mysqli_close($conn);
?>