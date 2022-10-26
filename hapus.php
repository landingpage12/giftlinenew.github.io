<?php
//koneksi database 
include 'koneksi.php'; include 'script/koneksi.php';

//menangkap data id yang di kirim dari url
$alamat= $_GET['alamat'];

//menghapus data dari database
$hapus = mysqli_query($db, "delete from pemesanan where alamat='$alamat'");

if ($hapus) {
echo "<script> alert ('Data Berhasil Dihapus')</script>"; header("refresh:0;admin.php");
} else {
echo "<script> alert ('Data Tidak Berhasil Dihapus')</script>"; header("refresh:0;admin.php");
}

?>
