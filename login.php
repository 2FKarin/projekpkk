<?php
// session mulai
session_start();
//include/require koneksi
require 'conn.php';
// jika teken tombol login
if (isset($_POST['login'])) {
    // simpan inputan yg terjadi pada variabel post dan massukan ke variable $username dan $password
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];
    // jalankan query dari sql, koneksi dari conn, lalu ambil semua isi dalam tb_user, jika inputan sesuai user dan pass
    $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' and password='$password'");
    // kondisi, jika query benar, 
    if (mysqli_num_rows($query) === 1) {
        // masukan ke variabel data
        $data = mysqli_fetch_object($query);
        // ambil nilai dan masukan ke dalam session
        $_SESSION['login'] = true;
        $_SESSION['fullname'] = $data->fullname;
        $_SESSION['username'] = $data->username;
        $_SESSION['role'] = $data->role;
        // arahkan ke dashboard-> index
        header('location:dashboard/index.php');
        // jika salah maka munculkan pop up login gagal, username/password salah
    } else {
    }
    //    echo $error = 'Username atau password yang anda masukan salah';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.min.css">
            <style type="text/css">
                body{
                    background-image: url(assets/img/login.jpg);
                }
            </style>
            <title>Login</title>
        </head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../capstone/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="../capstone/assets/Parsley.js-2.9.2/src/parsley.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://parsleyjs.org/src/parsley.css"> -->
    
    <script src="../capstone/assets/js/jquery.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->

    <script src="../capstone/assets/Parsley.js-2.9.2/dist/parsley.min.js"></script>
    <!-- <script src="https://parsleyjs.org/dist/parsley.min.js"></script> -->

    <script src="../capstone/assets/Parsley.js-2.9.2/dist/i18n/id.js"></script>
    <!-- <script src="https://parsleyjs.org/dist/i18n/id.js"></script> -->

</head>

<body>
    <div class="container-fluid vh-1">
        <div style="width:100%;margin-top:15%;">
            <div class="rounded d-flex justify-content-center">
                <div class="col-md-3 col-sm-12 shadow-lg p-3 bg-light" style="border-radius: 30px;">
                    <div class="text-center">
                        <h3 class="text-primary">LOGIN</h3>
                    </div>
                    <hr>
                    <form method="Post" id="form" data-parsley-validate>
                        <div class="form-group">
                            <label for="text">Username</label>
                            <input type="text" class="form-control" name="txtusername" placeholder=" Username" required data-parsley-length="[4, 12]">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="txtpassword" placeholder="Password" required data-parsley-length="[4, 12]">
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" id="submit" name="login" value="Login" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('#form').parsley();
</script>
</html>