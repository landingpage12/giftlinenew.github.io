<?php
include 'script/koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$toko = $_POST['toko'];
$tgl_ambil = $_POST['tgl_ambil'];
$jmlh_pesanan = $_POST['jmlh_pesanan'];
$harga = $_POST['harga'];
$totals = $_POST['totals'];


mysqli_query($db, "update pemesanan set nama='$nama', alamat='$alamat', no_hp='$no_hp', toko='$toko', tgl_ambil='$tgl_ambil', jmlh_pesanan='$jmlh_pesanan',  where alamat='$alamat'");

header("location:admin.php");
?>
