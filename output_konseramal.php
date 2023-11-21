<?php
$nama = $_POST['Nama'];
$Studio = $_POST['Studio'];
$Kelas = $_POST['Kelas'];
$Tiket = $_POST['Tiket'];

switch ($Studio) {
    case "Studio 1":
        $penyanyi = "Opick";
        break;
    default:
        $penyanyi = "Raihan";
        break;
}

switch ($Kelas) {
    case "VIP":
        $Harga = 500000;
        break;
    default:
        $Harga = 250000;
        break;
}

echo "<h2>Konser Amal Indahnya Berbagi</h2>";
echo "=====================================";
echo "<pre>";
echo "Nama Pemesanan         :$nama<br>";
echo "Kode Studio            :$Studio<br>";
echo "Bintang Tamu           :$penyanyi<br>";
echo "Jenis Kelas            :$Kelas<br>";
echo "Harga                  :$Harga<br>";
echo "Jumlah Beli            :$Tiket<br>";
echo "=====================================<br>";
$total = $Harga * $Tiket;
echo "Total Harga            :$total";
echo "</pre>";
?>
<br>
<a href="KonserAmal.php">Input Data Lagi?</a>
