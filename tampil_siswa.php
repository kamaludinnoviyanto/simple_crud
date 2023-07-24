<?php
include "koneksi.php";

$query = "SELECT * FROM tabel";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Usia</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['usia']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td>
                    <a href="edit_siswa.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="hapus_siswa.php?id=<?php echo $row['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="tambah_siswa.php">Tambah Data Siswa</a>
</body>
</html>