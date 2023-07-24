<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form action="proses_tambah_siswa.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Usia:</label>
        <input type="number" name="usia" required><br>

        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>

        <input type="submit" value="Tambah">
    </form>
    <br>
    <a href="tampil_siswa.php">Kembali ke Data Siswa</a>
</body>
</html>
