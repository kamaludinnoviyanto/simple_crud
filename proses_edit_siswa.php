<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tabel SET nama='$nama', usia='$usia', alamat='$alamat' WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: tampil_siswa.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
