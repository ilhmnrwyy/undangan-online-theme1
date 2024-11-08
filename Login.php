<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Login | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Undangan Pernikahan Online"/>
    <meta name="keywords" content="tekomantan-login"/>
    <meta name="website" content="https://tekomantan.com"/>
    <link rel="shortcut icon" type="image/x-icon" href="https://inveet.id/inveetv2/images/ico/favicon.ico">

    <!-- Meta tags untuk Open Graph -->
    <meta property="og:url" content="https://tekomantan.com"/>
    <meta property="og:description" content="Login | tekomantan.com"/>
    <meta property="og:locale" content="id_ID"/>
    <meta property="og:type" content="website"/>

    <!-- Warna tema untuk berbagai platform -->
    <meta name="theme-color" content="#121212">
    <meta name="msapplication-navbutton-color" content="#121212">
    <meta name="apple-mobile-web-app-status-bar-style" content="#121212">

    <!-- Icon untuk berbagai perangkat -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://inveet.id/inveetv2/images/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://inveet.id/inveetv2/images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://inveet.id/inveetv2/images/ico/favicon-16x16.png">
    <link rel="manifest" href="https://inveet.id/inveetv2/images/ico/site.webmanifest">

    <!-- Bootstrap dan CSS tambahan -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/line.css">
    <link rel="stylesheet" type="text/css" href="assets/css/log.css">
    <link rel="stylesheet" type="text/css" href="assets/css/skyblue.css">

    <!-- Dark Mode Styles -->
    <style>
        /* Mengatur seluruh tema ke mode gelap */
        body {
            background-color: #121212;
            color: #e0e0e0;
        }

        /* Kartu dan komponen form */
        .card {
            background-color: #1e1e1e;
            color: #e0e0e0;
            border: none;
        }

        /* Ikon dalam form */
        .form-icon i {
            color: #9e9e9e;
        }

        /* Input dan tombol */
        .form-control {
            background-color: #333;
            color: #e0e0e0;
            border: 1px solid #555;
        }

        /* Input dalam focus */
        .form-control:focus {
            background-color: #444;
            color: #ffffff;
            border-color: #777;
        }

        /* Tombol login */
        .btn-primary {
            background-color: #1976d2;
            border-color: #1976d2;
            color: #ffffff;
        }

        /* Hover efek pada tombol */
        .btn-primary:hover {
            background-color: #1565c0;
            border-color: #1565c0;
        }

        /* Teks untuk logo link */
        .text-center img {
            filter: brightness(80%);
        }
    </style>
</head>

<body>
    <?php require_once('Admin/Api/koneksi.php'); ?>

    <!-- Hero Section Start -->
    <section class="bg-home bg-circle-gradiant d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <div class="card login-page shadow-lg rounded">
                        <div class="card-body">
                            <!-- Logo -->
                            <div class="text-center">
                                <a href="https://linklogo">
                                    <img src="imgs/inveet-logo.png" alt="tekomantan.com">
                                </a>
                            </div>
                            <!-- Form Login -->
                            <form method="POST" action="log.php">
                                <div class="row">
                                    <!-- Email Field -->
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control ps-5" placeholder="Email"
                                                       name="email" required autofocus>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Password Field -->
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Password <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control ps-5" name="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Login Button -->
                                    <div class="col-lg-12 mb-0">
                                        <div class="d-grid">
                                            <button type="submit" name="login" class="btn btn-primary btn-pills">Masuk</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Javascript untuk Bootstrap dan Icon -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
