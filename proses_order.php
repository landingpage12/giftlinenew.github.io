<?php
//koneksi ke database
include 'script/koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$toko = $_POST['toko'];
$tgl_ambil= $_POST['tgl_ambil'];
$jmlh_pesanan = $_POST['jmlh_pesanan'];

switch ($toko) {
    case 1:
        $toko="ss";
        $harga=50000;
    break;
    case 2:
        $toko="taman";
        $harga=10000;
    break;
    case 3:
        $toko="museum";
        $harga=15000;
    break;
    default:
    echo "Kosong";
    break;
}
$total = ($jmlh_pesanan * $harga) ;


$totalumum = $harga * $jmlh_pesanan;
$totals = $totalumum;


$pesan = mysqli_query($db,"insert into pemesanan values ('$nama','$alamat','$no_hp','$toko','$tgl_ambil','$jmlh_pesanan','$harga','$totals')");
if ($pesan) {
    echo "<script> alert ('Data Berhasil Disimpan')</script>"; header("refresh:0;tampilangift.php?alamat=".$alamat);
} 
else {
    echo "<script> alert ('Data Tidak Berhasil Disimpan')</script>"; header("refresh:0;order.php");
}
    
?>
    