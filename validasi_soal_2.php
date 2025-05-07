<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $buku = $_POST['buku'];
    $tanggalPeminjaman = $_POST['tanggal_peminjaman'];
    $tanggalPengembalian = $_POST['tanggal_pengembalian'];
    $catatan = $_POST['catatan'];
    $errors = [];



    if($tanggalPeminjaman > $tanggalPengembalian) {
        echo  "Tanggal pengembalian harus lebih besar dari tanggal peminjaman.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>Field</th><th>Data</th></tr>";
        echo "<tr><td>NIM</td><td>" . htmlspecialchars($nim) . "</td></tr>";
        echo "<tr><td>Nama</td><td>" . ($nama == "" ? "Wajib diisi" : htmlspecialchars($nama)) . "</td></tr>";
        echo "<tr><td>Prodi</td><td>" . htmlspecialchars($prodi) . "</td></tr>";
        echo "<tr><td>Alamat</td><td>" . htmlspecialchars($alamat) . "</td></tr>";
        echo "<tr><td>Buku</td><td>" . htmlspecialchars($buku) . "</td></tr>";
        echo "<tr><td>Tanggal Peminjaman</td><td>" . htmlspecialchars($tanggalPeminjaman) . "</td></tr>";
        echo "<tr><td>Tanggal Pengembalian</td><td>" . htmlspecialchars($tanggalPengembalian) . "</td></tr>";
        echo "<tr><td>Catatan</td><td>" . htmlspecialchars($catatan) . "</td></tr>";
        echo "</table>";
    }
}
?>
