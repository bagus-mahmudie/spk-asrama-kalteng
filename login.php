<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SPK Asrama Mahasiswa Kal-Teng</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12" style=" background-image: url('assets/images/bg-login.jpg'); Background-size: cover; ">
                <div id="auth-left">
                    <h1 style="text-align:center" class="auth-title">
                    <img style="width:50%" src="assets/images/logo.png">
                    </h1>
                    <br/>
                    <form action="login-act.php" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right" style=" background-image: url('assets/images/bg-3.png'); Background-size: cover; " >
                    <!-- <div class="container" style="background-color:rgba(0, 0, 0, 0.5); width:100%; height:100%" > -->

                    <div class="container" style="padding:60px 110px" >
                        <h1 style="color:#FFF; text-align:center; text-shadow: 2px 2px 3px #A52A2A;">Selamat Datang </h1>
                        <br/>
                        <h3 style="color:#FFF; text-align:center; text-shadow: 2px 2px 3px #D2691E;">Di Sistem Pendukung Keputusan Penghuni Asrama Mahasiswa Kalimantan Tengah di Yogyakarta</h3>
                        <br/>
                        <!-- <img style="width:100%" src="assets/images/asrama.jpg"> -->
                    </div>
                    <!-- </div> -->

                </div>
            </div>
        </div>

    </div>
</body>

</html>
