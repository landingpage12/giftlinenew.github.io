<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Admin</title>
    </head>
    <link rel="stylesheet" href="script/css/bootstrap.min.css">
    <link rel="stylesheet" href="script/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512- iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHI hR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <body>
        <!--- Navbar --->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">GiftLine</a>
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
                        <a class="nav-link" href="index.php">Kontak</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Login -->
        <div class="container">
            <h2 class="text-center">Login Admin</h2><br>
            <form class="login_form" action="" method="POST" name="form">
                <div class="form-group" id="login">
                    <div class="username">Username</div>
                    <input autocomplete="off" type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
                </div>
                <div class="form-group">
                    <div class="password">Password</div>
                    <input type="password" name="password" class="form- control" placeholder="Masukkan Password Anda">
                </div>
                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
        </div>
        <br>
        <br>
        <br>
        
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

<?php
include 'script/koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $data = mysqli_query($db,"select * from admin where username = '$username' AND password='$password'");
    $sesi	= mysqli_num_rows($data);
    
    if ($sesi > 0) {
        $d = mysqli_fetch_object($data);
        $_SESSION['a_global']=$d;
        $_SESSION['id']=$d->id_admin;
        echo '<script>alert("Login Berhasil")</script>'; header("refresh:0;admin.php");
    }
    else{
        echo '<script>alert("Login Gagal")</script>'; header("refresh:0;#login.php");
    }
}
?>


