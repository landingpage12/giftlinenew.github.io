<?php
include 'script/koneksi.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CETAK ADMIN</title>
    </head>
    <body>
        <!-- bagian content -->
        <section class="content">
            <div class="box">
                <table class="table" border="10">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Alamat</th>
                            <th>No. HP</th>
                            <th>Toko</th>
                            <th>Tanggal Pengambilan</th>
                            <th>Jumlah Pesanan</th>
                            <th>Harga</th
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($db, "select * from pemesanan"); while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d['nama'] ?></td>
                            <td><?php echo $d['alamat'] ?></td>
                            <td><?php echo $d['no_hp'] ?></td>
                            <td><?php echo $d['toko'] ?></td>
                            <td><?php echo $d['tgl_ambil'] ?></td>
                            <td><?php echo $d['jmlh_pesanan'] ?></td>
                            <td><?php echo $d['harga'] ?></td>
                            <td><?php echo $d['total'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
        
        <script>
        window.print()
        </script>
    </body>
</html>

