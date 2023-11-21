<?php

$pilih=$_POST['Pilih'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$harga=['harga'];
$ls=$_POST['ls'];
$jenis=$_POST['Jenis'];

if	($pilih=="Komik"){
	 $judul="High School DXD";
	 $harga=1500;
}
elseif	($pilih=="Dongeng"){
	 $judul="Apa yang terjadi Jika Hitler Menang Perang Dunia 2?";
	 $harga=2000;
}
else	{
	$judul="Logika Informatika";
	$harga=2500;
}

echo "<center><h2> Cetak Struk Peminjaman <br></h2>";
echo "Perpusatakaan UMUKA</center>";
echo "<hr color=#8080FF>";
echo "<pre>";
echo "Nama Peminjaman		:$nama<br>";
echo "Alamat Peminjaman	:$alamat<br>";
echo "Jenis			:$jenis<br>";
echo "Kategori Buku		:$pilih<br>";
echo "Judul Buku 		:$judul<br>";
echo "Harga Pinjam		:Rp.$harga<br>";
echo "Lama Sewa 		:$ls<br>";
echo "<hr color=#8080FF>";

$sub=$harga*$ls;{
if($jenis=="Member")
$diskon=0.1*$sub;
else
	$diskon=0;
	$total=$sub-$diskon;
}
echo " Subtotal               :Rp.$sub<br>";
echo " Diskon			:Rp.$diskon<br>";
echo " Total Bayar 		:Rp.$total<br>";
?><br>
<hr color=#8080FF><br>
<a href="IF0222026_BelajarIF.php">Input Data Lagi?</a>
<marquee behavior="alternate">------------------Terimakasih------------------</marquee>


