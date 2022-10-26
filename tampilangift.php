<?php
include 'script/koneksi.php';
$alamat=$_GET['alamat'];
$gift = mysqli_query($db, "select * from pemesanan where alamat='$alamat'");
$d = mysqli_fetch_object($gift);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tampilan Pesanan</title>
    </head>
    <link rel="stylesheet" href="script/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="script/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512- iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHI hR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <body>
        <!--- Navbar --->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">GiftLine/a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data- target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="toko.php">Toko</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">Pesan Gift</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </nav>
            <br>
            <br>
        </div>
        
        <!-- Tampilan Tiket Pemesanan -->
        <p>
            <h1 align="center"><b><i>Pesanan Gift</b></i></h1>
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
                    <td>Jumlah Pesanan</td>
                    <td>: <?php echo $d->jmlh_pesanan?> orang</td>
                </tr>
               
                <tr>
                    <td>Harga Pesanan</td>
                    <td>: Rp. <?php echo $d->harga?></td>
                </tr>
               
                <tr>
                    <td>Total Bayar</td>
                    <td>: Rp. <?php echo $d->total?></td>
                </tr>
                <tr>
                    <td>
                        <a href="order.php" class="btn btn-primary">Kembali</a>
                        <button onclick="window.print()" class="btn btn-primary">Cetak Pesanan</a>
                    </td>
                </tr>
            </table>
            <br>
            <br>
        </p>
        
        <!-- footer -->
        <footer id="kontak">
            <p>Kontak Kami</p>
            <p>GiftLine</p>
            <div class="sosmed">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
            </div>
            <p class="end">CopyRight By @GiftLine</p>
        </footer>
    </body>
</html>

 




        

