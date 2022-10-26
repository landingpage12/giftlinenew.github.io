<?php
include 'script/koneksi.php';

$gift = mysqli_query($db, "SELECT * FROM pemesanan");
$d = mysqli_fetch_object($gift);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tampilan Pesanan</title>
    </head>
    <link rel="stylesheet" href="script/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <body>
        <!-- Tampilan Tiket Pemesanan -->
        <h1 align="center"><b><i>Pemesanan</b></i></h1>
        <hr width="300" style="2"><br>
        <table align="center" cellpadding="3" align="center" width="500">
            <tr>
                <td>Nama</td>
                <td>: <?php echo $d->nama?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?php echo $d->alamat?></td>
            </tr>
            <tr>
                <td>No. HP</td>
                <td>: <?php echo $d->no_hp?></td>
            </tr>
            <tr>
                <td>Toko</td>
                <td>: <?php echo $d->toko?></td>
            </tr>
            <tr>
                <td>Jumlah pesanan</td>
                <td>: <?php echo $d->jmlh_pesanan?> produk</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>: Rp. <?php echo $d->harga?></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>: Rp. <?php echo $d->total?></td>
            </tr>
            <tr>
                <td>
                    <a href="index.php" class="btn btn-primary">Kembali</a>
                </td>
            </tr>
        </table>
        <!--<script>
        window.print()
        </script>-->
    </body>
</html>

