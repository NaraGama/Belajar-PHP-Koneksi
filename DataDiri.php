<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Nama dan Alamat</title>
</head>
<body>

    <h2>Formulir Nama dan Alamat</h2>

    <?php
    // Periksa apakah data telah dikirimkan melalui metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari formulir
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];

        // Tampilkan hasil dengan format yang diinginkan
        echo "<p>Nama Anda: $nama</p>";
        echo "<p>Alamat Anda: $alamat</p>";
    } else {
        // Jika tidak ada data yang dikirimkan, tampilkan formulir
        echo '
            <form action="" method="post">
                <label for="nama">Nama Anda:</label>
                <input type="text" name="nama" required>

                <label for="alamat">Alamat Anda:</label>
                <textarea name="alamat" required></textarea>

                <button type="submit">Kirim</button>
            </form>
        ';
    }
    ?>

</body>
</html>
