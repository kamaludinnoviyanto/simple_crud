<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO tabel (nama, usia, alamat) VALUES ('$nama', '$usia', '$alamat')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: tampil_siswa.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
