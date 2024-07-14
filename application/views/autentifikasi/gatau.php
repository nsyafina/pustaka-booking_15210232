
<!------------------------header--------------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pustaka-Booking | <?= $judul; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets'); ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        *{
            font-family: serif;
        }
    </style>

</head>

<body style="background-image: linear-gradient(#FF298A, #FFD8E6);">

<!------------------------header--------------------------------------->
<!------------------------login---------------------------------------->
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-7 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 15px;">
                    <div class="card-body p-0" style="box-shadow: inset -5px -5px rgba(0, 0, 0, 0.4); border-radius: 15px;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="font-size: 30px;"><strong>LOGIN</strong></h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('Autentifikasi'); ?>">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan Alamat Email" style="font-size: 16px;" >
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukkan Password" style="font-size: 16px;">
                                        </div>
                                        <a href="index.php" class="btn btn-user btn-block" style="background-color: #FF298A; color: black; font-size: 17px; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);">
                                            Masuk
                                        </a>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Lupa Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Daftar!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

<!------------------------login---------------------------------------->
<!------------------------footer--------------------------------------->

<!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<!------------------------footer--------------------------------------->
