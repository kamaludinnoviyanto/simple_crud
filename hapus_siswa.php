<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM tabel WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: tampil_siswa.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
