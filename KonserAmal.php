<!DOCTYPE html>
<html>
    <head>
        <title>Tugas Bu Nova</title>
    </head>
    <body>
        <pre>
            <h1>Konser Amal Indahnya Berbagi</h1>
            <form action="output_konseramal.php" method="post">
                Nama Pemesanan  :   <input type="text" name="Nama">
                <br>
                Kode Studio     :   <select name="Studio" id="">
                                        <option value="Studio 1"> Studio 1</option>
                                        <option value="Studio 2"> Studio 2</option>
                                    </select>
                <br>
                Jenis Kelas     :   <input type="radio" name="Kelas" value="VIP">VIP
                                    <input type="radio" name="Kelas" value="Festival">Festival
                <br>
                Jumlah Tiket    :   <input type="text" name="Tiket">
                <br>
                <input type="submit" value="Tampil">    <input type="reset" value="Batal">
            </form>
        </pre>
    </body>
</html>