<!DOCTYPE html>
<html>
    <head>
        <title>Belajar Percabangan</title>
    </head>
    <body>
        <center><h2>Perpustakaan UMUKA</h2>
        JL. Raya Solo-Tawangmangu No.KM. 12, Pandes, Papahan,,
        Kec. Tasikmadu, Kabupaten Karanganyar, Jawa Tengah 57761</center>
        <br>
        <br>
        <form action="outputIF.php" method="post">
            <pre>
                Nama Peminjam       :   <input type="text" name="nama" size="20">
                <br>
                Alamat              :   <textarea name="alamat" id="" cols="20" rows="5" wrap="soft"></textarea>
                <br>
                Jenis               :   <input type="radio" name="Jenis" value="Member">Member
                                        <input type="radio" name="Jenis" value="Non-Member">Non-Member
                <br>
                Pilih Kategori      :   <select name="Pilih" id="">
                                            <option value="Komik">Komik</option>
                                            <option value="Dongeng">Dongeng</option>
                                            <option value="Pelajaran">Pelajaran</option>
                                        </select>
                <br>
                Lama Sewa           :   <input type="text" name="ls" size="10">
                <br>
                    <input type="submit" value="Proses">    <input type="reset" value="Batal">
            </pre>
        </form>
    </body>
</html>