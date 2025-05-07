<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php

    $daftarProdi = [
        "Sistem Informasi",
        "Teknik Informatika",
        "Hukum",
        "Teknik Elektro",
        "DKV"
    ];


    $daftarKategori = [
        "Novel",
        "Komik",
        "Ensiklopedia",
        "Biografi",
        "Sains"
    ];



    $daftarBuku = [
        "The Great Gatsby",
        "To Kill a Mockingbird",
        "1984",
        "Pride and Prejudice",
        "Harry Potter and the Sorcerer's Stone"
    ];

    ?>

    <div class="container">

        <div class="form-container">

            <form action="proses_validasi.php" method="post">

                <div class="form-group">
                    <label for="nim"> Nim : </label>
                    <input type="text" name="nim" required> <br>
                </div>

                <div class="form-group">
                    <label for="nama"> Nama: </label>
                    <input type="text" name="nama" placeholder="Isi dengan nama"> <br>

                </div>

                <div class="form-group">
                    <label for="prodi"> Prodi: </label>
                    <select name="prodi" id="prodi" style="width: 200px;">
                        <?php
                        foreach ($daftarProdi as $prodi) : ?>
                            <option value=" <?= htmlspecialchars($prodi) ?>"> <?= htmlspecialchars($prodi) ?> </option>

                        <?php endforeach; ?>
                        ?>
                    </select> <br>

                </div>

                <div class="form-group">
                    <label for="alamat"> Alamat: </label>
                    <input type="text" name="alamat" placeholder="Isi Alamat Disini"> <br>

                </div>



                <div class="form-group">
                    <label for="kategori"> Kategori: </label>
                    <select name="kategori" id="kategori" style="width: 200px;">
                        <?php foreach ($daftarKategori as $kategori) : ?>
                            <option value="<?= htmlspecialchars($kategori) ?>"><?= htmlspecialchars($kategori) ?></option>
                        <?php endforeach; ?>
                    </select> <br>
                </div>

                <div class="form-group">
                    <label for="buku"> Buku: </label>
                    <select name="buku" id="buku" style="width: 200px;">
                        <?php foreach ($daftarBuku as $buku) : ?>
                            <option value="<?= htmlspecialchars($buku) ?>"><?= htmlspecialchars($buku) ?></option>
                        <?php endforeach; ?>
                    </select> <br>
                </div>


                <div class="form-group">
                    <label for="tanggal_peminjaman"> Tanggal Peminjaman: </label>
                    <input type="date" name="tanggal_peminjaman" placeholder="Isi Tanggal Peminjaman "> <br>
                </div>

                <div class="form-group">
                    <label for="tanggal_pengembalian"> Tanggal pengembalian: </label>
                    <input type="date" name="tanggal_pengembalian" placeholder="Isi Tanggal pengembalian "> <br>
                </div>

                <div class="form-group">
                    <label for="catatan"> Catatan: </label>
                    <textarea name="catatan" placeholder="Isi Catatan"> </textarea> <br> <br>
                </div>

                <input class="input-style" type="submit" value="Kirim">

            </form>

        </div>

    </div>

</body>

</html>