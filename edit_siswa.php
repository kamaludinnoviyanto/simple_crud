<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM tabel WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="proses_edit_siswa.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>

        <label>Usia:</label>
        <input type="number" name="usia" value="<?php echo $row['usia']; ?>" required><br>

        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required><br>

        <input type="submit" value="Update">
    </form>
    <br>
    <a href="tampil_siswa.php">Kembali ke Data Siswa</a>
</body>
</html>
