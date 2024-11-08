<!DOCTYPE html>
<html lang="id" class="notranslate" translate="no">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="color-scheme" content="light only">
    <meta name="format-detection" content="telephone=no">
    <meta name="google" content="notranslate" />
    <meta name="robots" content="noindex">
    <?php require_once('Admin/Api/koneksi.php'); ?>
    <?php
    $resepsi = mysqli_query($conn, "SELECT * FROM resepsi WHERE idResepsi = 1"); // atau ID sesuai dengan kondisi
    $infoResepsi = mysqli_fetch_array($resepsi);
    ?>
    <title>The Wedding of <?php echo $infoResepsi['namaPria']; ?> &amp; <?php echo $infoResepsi['namaWanita']; ?></title>
    <meta name="title" content="The Wedding of <?php echo $infoResepsi['namaPria']; ?> &amp; <?php echo $infoResepsi['namaWanita']; ?>">
    <meta name="description" content="Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, untuk menghadiri acara Resepsi Pernikahan Putra Kami">
    <meta itemprop="image" content="http://127.0.0.1/tekomantan/Admin/fileUpload/fotoBerdua/<?php echo $tampilSambutan['fotoBerdua']; ?>">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://satumomen.com/izzan-april-wedding">
    <meta property="og:title" content="The Wedding of <?php echo $infoResepsi['namaPria']; ?> &amp; <?php echo $infoResepsi['namaWanita']; ?>">
    <meta property="og:description" content="Tanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, untuk menghadiri acara Resepsi Pernikahan Putra Kami">
    <meta property="og:image" content="http://127.0.0.1/tekomantan/Admin/fileUpload/fotoBerdua/<?php echo $tampilSambutan['fotoBerdua']; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Poppins&display=swap" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script src="js/js?id=UA-154977160-1"></script>
    <script type="12f612a15ba320b811cdf701-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-154977160-1');
    </script>
    <!-- Google tag (gtag.js) -->
    <script src="js/js?id=AW-772093511"></script>
    <script type="12f612a15ba320b811cdf701-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-772093511');
    </script>
    <!-- Google Tag Manager -->
    <script type="12f612a15ba320b811cdf701-text/javascript">
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P7PBT8N');
    </script>
    <!-- End Google Tag Manager -->
    <script src="js/adsbygoogle.js?client=ca-pub-7397502458782120"></script>



    <!-- css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animatehome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstraphome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/stylehome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/themesv2home.css?v=080386">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,700;1,9..144,400;1,9..144,700&family=Grenze+Gotisch:wght@100;200;300;700&family=Parisienne&display=swap');

        :root {
            --inv-bg: #e4d1b8;
            --inv-base: #3d1e17;
            --inv-accent: #81423c;
            --inv-border: #7b938f;
            --font-base: 'Fraunces', serif;
            --font-accent: 'Grenze Gotisch', cursive;
            --font-latin: 'Parisienne', cursive;
            --menu-bg: #364136;
            --menu-inactive: #ebce95;
            --menu-active: #81423c;
            --btn-color: #ffffff;
        }

        .menu-item.is-active {
            background-color: var(--menu-active);
            color: var(--menu-inactive) !important;
        }

        .frame-out {
            width: auto;
            display: none;
            top: 0;
            z-index: 9;
        }

        .cover .frame-out {
            display: block;
        }

        .editor-wrapper .cover .frame-out {
            display: none
        }
    </style>


    <style>
        @import url('/fonts/brittany_signature/BrittanySignature.css');
        @import url('/fonts/photograph_signature/fonts.css');
        @import url('/fonts/heatwood/Heatwood.css');

        .font-brittany-signature {
            font-family: 'Brittany Signature';
            line-height: 1.6 !important;
        }

        .font-photograph-signature {
            font-family: 'Photograph Signature';
            line-height: 1.6 !important;
        }

        .font-heatwood {
            font-family: 'Heatwood';
            line-height: 3 !important;
        }

        .caveat-font {
            font-family: 'Caveat', sans-serif;
        }

        .poppins-font {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <style>
        /* Menata container galeri dengan grid */
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* Membuat 2 kolom tetap */
            gap: 10px;
            /* Spasi antar elemen gambar */
            margin: 10px auto;
            max-width: 1000px;
            /* Maksimal lebar gallery container */
        }

        /* Menata setiap item gambar */
        .gallery-item {
            position: relative;
            overflow: hidden;
            /* Menyembunyikan bagian gambar yang melampaui batas */
            border-radius: 15px;
            /* Memberikan sudut melengkung */
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            /* Efek transisi saat hover */
        }

        /* Menambahkan tinggi proporsional */
        .gallery-item::before {
            content: "";
            display: block;
            padding-top: 100%;
            /* Menjaga proporsi 1:1 */
        }

        .gallery-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Menyesuaikan gambar agar tidak terdistorsi */
            transition: transform 0.5s ease-in-out;
            /* Efek transisi zoom pada gambar */
        }

        /* Efek zoom pada gambar saat hover */
        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
            /* Memperbesar gambar sedikit saat hover */
        }
    </style>

</head>

<body>
    <?php require_once('Admin/Api/koneksi.php'); ?>
    <main id="app">
        <div id="modalOverlay" class="modal-backdrop fade" style="display: none;"></div>
        <!-- Loader -->
        <!-- <div id="loader" class="loader-wrapper"><span class="loader"><span class="loader-inner"></span></span></div> -->
        <!-- music -->
        <audio id="music" loop autoplay>
            <source src="https://j.top4top.io/m_3234cehw91.mp3">
        </audio>
        <!-- end music -->
        <div id="workspace-container" class="position-fixed h-100 w-100" style="overflow: hidden">
            <div id="panZoom" class="position-fixed h-100 w-100" style="top: 0; right:0; bottom:0; left:0; transform-origin: 50% 50%;">
                <div class="h-100 w-100 d-flex align-items-center justify-content-center">
                    <div class="canvas not-open  ">
                        <!-- invitation -->
                        <div id="satuMomen" data-guest="" data-group="">
                            <div class="satumomen_track">
                                <ul class="satumomen_list">
                                    <li class="satumomen_slide satumomen_cover">
                                        <div class="container-mobile cover" style="background-image: url(https://satumomen.com/themes/javanese-wayang/bg.webp); ;">
                                            <div class="frame">
                                                <img class="frame-bl animate__animated animate__fadeInLeft animate__slower" src=imgs/middle-left.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInRight animate__slower" src=imgs/middle-right.png alt="frame">
                                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slow" src=imgs/frame-tl.png alt="frame">
                                                <img class="frame-tr animate__animated animate__fadeInTopRight animate__slow" src=imgs/frame-tr.png alt="frame">
                                                <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slow" src=imgs/frame-bl.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slow" src=imgs/frame-br.png alt="frame">
                                                <img class="frame-tl h-100 frame-out animate__animated animate__slideOutLeft animate__slow" src=imgs/kiri.png alt="frame">
                                                <img class="frame-tr h-100 frame-out animate__animated animate__slideOutRight animate__slow" src=imgs/kanan.png alt="frame">
                                            </div>
                                            <?php
                                            // Pastikan koneksi ke database sudah dilakukan dengan benar sebelum eksekusi query
                                            $resepsi = mysqli_query($conn, "SELECT * FROM resepsi");
                                            while ($infoResepsi = mysqli_fetch_array($resepsi)) {
                                            ?>
                                                <div class="d-flex justify-content-center align-items-center" style="height:100%;width:100%;background-size:cover;z-index:2;position:relative;">
                                                    <div style="width:100%;">
                                                        <div class="text-center editable animate__animated animate__fadeInDown animate__slower mb-4 font-accent" style="font-size:20px;"><?php echo $infoResepsi['namaHari']; ?><br />
                                                            <?php
                                                            $getTanggal = $infoResepsi['tglResepsi'];
                                                            $pecahTanggal = explode("-", $getTanggal);
                                                            $tahun = $pecahTanggal[0];
                                                            $bulan = $pecahTanggal[1];
                                                            $tanggal = $pecahTanggal[2];

                                                            if ($bulan == "01") {
                                                                echo "<h5>" . $tanggal . " Januari " . $tahun . "</h5>";
                                                            } else if ($bulan == "02") {
                                                                echo "<h5>" . $tanggal . " Februari " . $tahun . "</h5>";
                                                            } else if ($bulan == "03") {
                                                                echo "<h5>" . $tanggal . " Maret" . $tahun . "</h5>";
                                                            } else if ($bulan == "04") {
                                                                echo "<h5>" . $tanggal . " April " . $tahun . "</h5>";
                                                            } else if ($bulan == "05") {
                                                                echo "<h5>" . $tanggal . " Mei " . $tahun . "</h5>";
                                                            } else if ($bulan == "06") {
                                                                echo "<h5>" . $tanggal . " Juni " . $tahun . "</h5>";
                                                            } else if ($bulan == "07") {
                                                                echo "<h5>" . $tanggal . " Juli " . $tahun . "</h5>";
                                                            } else if ($bulan == "08") {
                                                                echo "<h5'>" . $tanggal . " Agustus " . $tahun . "</h5>";
                                                            } else if ($bulan == "09") {
                                                                echo "<h5>" . $tanggal . " September " . $tahun . "</h5>";
                                                            } else if ($bulan == "10") {
                                                                echo "<h5>" . $tanggal . " Oktober " . $tahun . "</h5>";
                                                            } else if ($bulan == "11") {
                                                                echo "<h5></h5>" . $tanggal . " November " . $tahun . "</h5>";
                                                            } else if ($bulan == "12") {
                                                                echo "<h5>" . $tanggal . " Desember " . $tahun . "</h5>";
                                                            }

                                                            ?></div>
                                                        <div class="d-flex justify-content-center animate__animated animate__zoomIn animate__slower image-editable">
                                                            <div class="editable color-accent h3 mb-0 font-accent" style="font-size:90px;transform:translate(10px, -10px);font-weight:200;"><?php echo $infoResepsi['inisialPria']; ?></div>
                                                            <div class="editable color-accent h3 mb-0 font-accent" style="font-size:90px;transform:translate(-10px, 10px);font-weight:200;"><?php echo $infoResepsi['inisialWanita']; ?></div>
                                                        </div>
                                                        <div class="text-center animate__animated animate__fadeInUp animate__slower mb-5">
                                                            <div class="editable color-accent h3 mb-0 font-accent" style="font-size:30px;"><?php echo $infoResepsi['namaPria']; ?> &amp; <?php echo $infoResepsi['namaWanita']; ?></div>
                                                            <div class="editable" style="font-size:15px;">SAVE THE DATE</div>
                                                        </div>
                                                        <div class="text-center mx-auto" style="max-width:300px;">
                                                            <div class="text-center mb-3 p-2 animate__animated animate__zoomIn animate__slower">
                                                                <div class="editable mb-1 animate__animated animate__fadeInUp animate__slower" style="font-size:14px;">Kepada Yth;<br />Bapak/Ibu/Saudara/i</div>
                                                                <div id="guestNameSlot" class="editable color-accent h5 font-weight-bold mb-1 animate__animated animate__fadeInUp animate__slower" style="font-size:16px;">

                                                                    <?php
                                                                    // Tangkap parameter 'nama' dari URL
                                                                    $nama = isset($_GET['nama']) ? htmlspecialchars($_GET['nama']) : 'Tamu';

                                                                    // Tampilkan nama di halaman
                                                                    echo "$nama";
                                                                    ?>
                                                                </div>
                                                            </div><button class="btn-open-invitation btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow" style="font-size:14px;">Open Invitation</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>

                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile " style="background-image: url(https://satumomen.com/themes/javanese-wayang/bg.webp); ;">
                                            <div class="frame">
                                                <img class="frame-bl animate__animated animate__fadeInLeft animate__slower" src=imgs/middle-left.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInRight animate__slower" src=imgs/middle-right.png alt="frame">
                                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slow" src=imgs/frame-tl.png alt="frame">
                                                <img class="frame-tr animate__animated animate__fadeInTopRight animate__slow" src=imgs/frame-tr.png alt="frame">
                                                <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slow" src=imgs/frame-bl.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slow" src=imgs/frame-br.png alt="frame">
                                                <img class="frame-tl h-100 frame-out animate__animated animate__slideOutLeft animate__slow" src=imgs/kiri.png alt="frame">
                                                <img class="frame-tr h-100 frame-out animate__animated animate__slideOutRight animate__slow" src=imgs/kanan.png alt="frame">
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center" style="height:100%;">
                                                <div>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="editable color-accent h3 mb-0 text-center animate__animated animate__fadeInDown animate__slower font-accent" style="font-size:128px;margin-top:-30px;margin-right:-20px;font-weight:200;"><?php echo $infoResepsi['inisialPria']; ?></div>
                                                        <div class="editable color-accent h3 mb-0 text-center animate__animated animate__fadeInDown animate__slower font-accent" style="font-size:128px;font-weight:200;"><?php echo $infoResepsi['inisialWanita']; ?></div>
                                                    </div>


                                                    <?php
                                                    $sambutan = mysqli_query($conn, "SELECT * FROM sambutan");
                                                    if ($tampilSambutan = mysqli_fetch_array($sambutan)) {
                                                    ?>
                                                        <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                            <div class="editable quotes mb-3" style="font-size:20px;"><?php echo $tampilSambutan['quotesAwal']; ?></div>
                                                            <div class="editable quotes mb-3 font-italic" style="font-size:14.4px;"><?php echo $tampilSambutan['quotes']; ?></div>
                                                            <div class="editable" style="font-size:14.4px;"><?php echo $tampilSambutan['quotesAkhir']; ?></div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile " style="background-image: url(https://satumomen.com/themes/javanese-wayang/bg.webp); ;">
                                            <div class="frame">
                                                <img class="frame-bl animate__animated animate__fadeInLeft animate__slower" src=imgs/middle-left.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInRight animate__slower" src=imgs/middle-right.png alt="frame">
                                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slow" src=imgs/frame-tl.png alt="frame">
                                                <img class="frame-tr animate__animated animate__fadeInTopRight animate__slow" src=imgs/frame-tr.png alt="frame">
                                                <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slow" src=imgs/frame-bl.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slow" src=imgs/frame-br.png alt="frame">
                                                <img class="frame-tl h-100 frame-out animate__animated animate__slideOutLeft animate__slow" src=imgs/kiri.png alt="frame">
                                                <img class="frame-tr h-100 frame-out animate__animated animate__slideOutRight animate__slow" src=imgs/kanan.png alt="frame">
                                            </div>
                                            <div class="d-flex justify-content-center flex-column" style="overflow:hidden;height:100%;">
                                                <div class="image-editable mb-4 animate__animated animate__zoomIn animate__slower" style="height:auto;width:50%;margin:auto;overflow:hidden;">
                                                    <img src="http://127.0.0.1/tekomantan/Admin/fileUpload/fotoBerdua/<?php echo $tampilSambutan['fotoBerdua']; ?>" style="width: 100%;height: 100%;object-fit: contain;" alt="fotoromantis.png" />
                                                </div>
                                                <div class="mb-auto" style="width:100%;">
                                                    <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                        <div class="editable font-italic mb-3" style="font-size:14.4px;"><?php echo $tampilSambutan['pembukaSambutan']; ?> </div>
                                                        <div class="editable quotes" style="font-size:14.4px;"><?php echo $tampilSambutan['isiSambutan']; ?> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile " style="background-image: url(https://satumomen.com/themes/javanese-wayang/bg.webp); ;">
                                            <div class="frame">
                                                <img class="frame-bl animate__animated animate__fadeInLeft animate__slower" src=imgs/middle-left.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInRight animate__slower" src=imgs/middle-right.png alt="frame">
                                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slow" src=imgs/frame-tl.png alt="frame">
                                                <img class="frame-tr animate__animated animate__fadeInTopRight animate__slow" src=imgs/frame-tr.png alt="frame">
                                                <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slow" src=imgs/frame-bl.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slow" src=imgs/frame-br.png alt="frame">
                                                <img class="frame-tl h-100 frame-out animate__animated animate__slideOutLeft animate__slow" src=imgs/kiri.png alt="frame">
                                                <img class="frame-tr h-100 frame-out animate__animated animate__slideOutRight animate__slow" src=imgs/kanan.png alt="frame">
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center" style="height:100%;">
                                                <div>
                                                    <div>
                                                        <div class="image-editable mb-3 animate__animated animate__fadeInLeft animate__slower" style="height:100px;width:100px;margin:auto;border-radius:100%;overflow:hidden;">
                                                            <img src="http://127.0.0.1/tekomantan/Admin/fileUpload/fotoP/<?php echo $tampilSambutan['fotoP']; ?>" style="width: 100%;height: 100%;object-fit: cover;" alt="female-1-1687991981.webp" />
                                                        </div>
                                                        <div class="text-center animate__animated animate__fadeInLeft animate__slower" style="position:relative;">
                                                            <div class="editable color-accent h4 mb-2 font-accent" style="font-size:24px;"><?php
                                                                                                                                            $pengantin = mysqli_query($conn, "SELECT * FROM pengantin");
                                                                                                                                            while ($infoPengantin = mysqli_fetch_array($pengantin)) {
                                                                                                                                                echo "<p class='desc'>" . $infoPengantin['namaP'] . "</p>";
                                                                                                                                            }
                                                                                                                                            ?></div>
                                                            <div class="editable" style="font-size:14.4px; margin: 0; padding: 0;">
                                                                <?php
                                                                $pengantin = mysqli_query($conn, "SELECT * FROM pengantin");
                                                                while ($infoPengantin = mysqli_fetch_array($pengantin)) {
                                                                    echo "<p class='desc' style='margin: 0;'>" . $infoPengantin['putrake'] . "</p>";
                                                                }
                                                                ?>
                                                                <?php
                                                                $pengantin = mysqli_query($conn, "SELECT * FROM pengantin");
                                                                while ($infoPengantin = mysqli_fetch_array($pengantin)) {
                                                                    echo "<p class='desc' style='margin: 0;'>" . $infoPengantin['ortupp'] . "</p>";
                                                                }
                                                                ?>
                                                                <?php
                                                                $pengantin = mysqli_query($conn, "SELECT * FROM pengantin");
                                                                while ($infoPengantin = mysqli_fetch_array($pengantin)) {
                                                                    echo "<p class='desc' style='margin: 0;'>" . $infoPengantin['ortupw'] . "</p>";
                                                                }
                                                                ?>
                                                            </div>

                                                        </div>

                                                        <div class="editable mb-3 text-center animate__animated animate__fadeIn animate__slower " style="font-size:27px; font-family: 'Caveat', sans-serif;">dengan</div>
                                                        <div class="text-center animate__animated animate__fadeInRight animate__slower" style="position:relative;">
                                                            <div class="editable color-accent h4 mb-2 font-accent" style="font-size:24px;">
                                                                <?php
                                                                $pengantin = mysqli_query($conn, "SELECT * FROM pengantin");
                                                                while ($infoPengantin = mysqli_fetch_array($pengantin)) {
                                                                    echo "<p class='desc'>" . $infoPengantin['namaw'] . "</p>";
                                                                }
                                                                ?>

                                                            </div>
                                                            <div class="editable" style="font-size:14.4px; margin: 0; padding: 0;">
                                                                <?php
                                                                $pengantin = mysqli_query($conn, "SELECT * FROM pengantin");
                                                                while ($infoPengantin = mysqli_fetch_array($pengantin)) {
                                                                    echo "<p class='desc' style='margin: 0;'>" . $infoPengantin['putrike'] . "</p>";
                                                                }
                                                                ?>
                                                                <?php
                                                                $pengantin = mysqli_query($conn, "SELECT * FROM pengantin");
                                                                while ($infoPengantin = mysqli_fetch_array($pengantin)) {
                                                                    echo "<p class='desc' style='margin: 0;'>" . $infoPengantin['ortuwp'] . "</p>";
                                                                }
                                                                ?>
                                                                <?php
                                                                $pengantin = mysqli_query($conn, "SELECT * FROM pengantin");
                                                                while ($infoPengantin = mysqli_fetch_array($pengantin)) {
                                                                    echo "<p class='desc' style='margin: 0;'>" . $infoPengantin['ortuww'] . "</p>";
                                                                }
                                                                ?>
                                                            </div>

                                                        </div>
                                                        <div class="image-editable mt-3 animate__animated animate__fadeInRight animate__slower" style="height:100px;width:100px;margin:auto;border-radius:100%;overflow:hidden;">
                                                            <img src="http://127.0.0.1/tekomantan/Admin/fileUpload/fotoW/<?php echo $tampilSambutan['fotoW']; ?>" style=" width: 100%;height: 100%;object-fit: cover;" alt="fotowanita" />
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile " style="background-image: url(https://satumomen.com/themes/javanese-wayang/bg.webp); ;">
                                            <div class="frame">
                                                <img class="frame-bl animate__animated animate__fadeInLeft animate__slower" src=imgs/middle-left.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInRight animate__slower" src=imgs/middle-right.png alt="frame">
                                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slow" src=imgs/frame-tl.png alt="frame">
                                                <img class="frame-tr animate__animated animate__fadeInTopRight animate__slow" src=imgs/frame-tr.png alt="frame">
                                                <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slow" src=imgs/frame-bl.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slow" src=imgs/frame-br.png alt="frame">
                                                <img class="frame-tl h-100 frame-out animate__animated animate__slideOutLeft animate__slow" src=imgs/kiri.png alt="frame">
                                                <img class="frame-tr h-100 frame-out animate__animated animate__slideOutRight animate__slow" src=imgs/kanan.png alt="frame">
                                            </div>
                                            <?php
                                            $resepsi = mysqli_query($conn, "SELECT * FROM resepsi");
                                            while ($infoResepsi = mysqli_fetch_array($resepsi)) {
                                            ?>
                                                <div class="px-4 d-flex justify-content-center align-items-center" style="height:100%;">
                                                    <div style="width:100%;">
                                                        <div class="d-flex justify-content-center align-items-center mb-4">
                                                            <div class="text-center animate__animated animate__fadeInLeft animate__slower">
                                                                <div class="editable" style="font-size:14px;"><?php echo $infoResepsi['namaHari']; ?></div>
                                                                <div class="editable font-weight-bold" style="font-size:60px;line-height:1;">



                                                                </div>
                                                                <div class="editable" style="font-size:14px;">

                                                                    <?php
                                                                    $getTanggal = $infoResepsi['tglResepsi'];
                                                                    $pecahTanggal = explode("-", $getTanggal);
                                                                    $tahun = $pecahTanggal[0];
                                                                    $bulan = $pecahTanggal[1];
                                                                    $tanggal = $pecahTanggal[2];

                                                                    if ($bulan == "01") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " JANUARI " . $tahun . "</div>";
                                                                    } else if ($bulan == "02") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " FEBRUARI " . $tahun . "</div>";
                                                                    } else if ($bulan == "03") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " MARET " . $tahun . "</div>";
                                                                    } else if ($bulan == "04") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " APRIL " . $tahun . "</div>";
                                                                    } else if ($bulan == "05") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " MEI " . $tahun . "</div>";
                                                                    } else if ($bulan == "06") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " JUNI " . $tahun . "</div>";
                                                                    } else if ($bulan == "07") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " JULI " . $tahun . "</div>";
                                                                    } else if ($bulan == "08") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " AGUSTUS " . $tahun . "</div>";
                                                                    } else if ($bulan == "09") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " SEPTEMBER " . $tahun . "</div>";
                                                                    } else if ($bulan == "10") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " OKTOBER " . $tahun . "</div>";
                                                                    } else if ($bulan == "11") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " NOVEMBER " . $tahun . "</div>";
                                                                    } else if ($bulan == "12") {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:60px;line-height:1;'>" . $tanggal . "</div>" . "<div class='editable' style='font-size:14px;'>" . " DESEMBER " . $tahun . "</div>";
                                                                    }

                                                                    ?>


                                                                    <br />



                                                                </div>
                                                            </div>
                                                            <div class="animate__animated animate__zoomIn animate__slower" style="height:130px;width:1px;background-color:var(--inv-base);margin-right:1rem;margin-left:1rem;">

                                                            </div>
                                                            <?php
                                                            $hitungTgl = mysqli_query($conn, "SELECT * FROM resepsi");
                                                            while ($hTgl = mysqli_fetch_array($hitungTgl)) {
                                                                // Format ulang jam akad dan jam resepsi ke format "HH:MM WIB"
                                                                $formattedJamAkad = date("H:i", strtotime($hTgl['jamAkad'])) . " WIB";
                                                                $formattedJamResepsi = date("H:i", strtotime($hTgl['jamResepsi'])) . " WIB";
                                                            ?>
                                                                <div class="text-center animate__animated animate__fadeInRight animate__slower">
                                                                    <div class="editable mb-2 font-weight-bold" style="font-size:12px;">
                                                                    <?php
                                                                    // Tampilkan waktu yang sudah diformat
                                                                    echo "AKAD NIKAH : " . $formattedJamAkad;
                                                                    echo "<br>";
                                                                    echo "RESEPSI : " . $formattedJamResepsi;
                                                                }
                                                                    ?>

                                                                    </div>
                                                                    <div class="editable" style="font-size:12px;">

                                                                        <?php
                                                                        $lokasi = mysqli_query($conn, "SELECT * FROM resepsi");
                                                                        while ($infoLokasi = mysqli_fetch_array($lokasi)) {
                                                                            echo "<div class='editable font-weight-bold' style='font-size:14.4px;' >" . $infoLokasi['namaGedung'] . "</div>";
                                                                            echo $infoLokasi['alamatResepsi'];
                                                                        ?>

                                                                            <br />
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <!-- Lanjutkan ke bagian HTML setelah pemrosesan PHP -->

                                                        <div data-datetime="<?php echo $infoResepsi['tanggalCountdown']; ?>" class="countdown-wrapper d-flex flex-column animate__animated animate__fadeInUp animate__slower">
                                                            <div class="countdown text-center">
                                                                <div class="countdown-item day">
                                                                    <div class="number">00</div>
                                                                    <div class="text editable">Hari</div>
                                                                </div>
                                                                <div class="countdown-item hour">
                                                                    <div class="number">00</div>
                                                                    <div class="text editable">Jam</div>
                                                                </div>
                                                                <div class="countdown-item minute">
                                                                    <div class="number">00</div>
                                                                    <div class="text editable">Menit</div>
                                                                </div>
                                                                <div class="countdown-item second">
                                                                    <div class="number">00</div>
                                                                    <div class="text editable">Detik</div>
                                                                </div>
                                                            </div>
                                                            <button class="btn-countdown btn btn-sm btn-pilled btn-accent mt-2">Atur Countdown</button>
                                                        </div>
                                                        <div class="text-center"></div>
                                                    </div>
                                                </div>
                                        </div>
                                    <?php
                                                                        }
                                    ?>
                                <?php
                                            }
                                ?>

                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile " style="background-image: url(https://satumomen.com/themes/javanese-wayang/bg.webp); ;">
                                            <div class="frame">
                                                <img class="frame-bl animate__animated animate__fadeInLeft animate__slower" src=imgs/middle-left.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInRight animate__slower" src=imgs/middle-right.png alt="frame">
                                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slow" src=imgs/frame-tl.png alt="frame">
                                                <img class="frame-tr animate__animated animate__fadeInTopRight animate__slow" src=imgs/frame-tr.png alt="frame">
                                                <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slow" src=imgs/frame-bl.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slow" src=imgs/frame-br.png alt="frame">
                                                <img class="frame-tl h-100 frame-out animate__animated animate__slideOutLeft animate__slow" src=imgs/kiri.png alt="frame">
                                                <img class="frame-tr h-100 frame-out animate__animated animate__slideOutRight animate__slow" src=imgs/kanan.png alt="frame">
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center" style="height:100%;">
                                                <div style="width:100%;">
                                                    <div>
                                                        <?php
                                                        $resepsi = mysqli_query($conn, "SELECT * FROM resepsi");
                                                        while ($tampilResepsi = mysqli_fetch_array($resepsi)) {
                                                        ?>
                                                            <div style="width:100%;margin:auto;border-radius:10px;overflow:hidden;margin-bottom:20px;padding-bottom:100%;position:relative;" class="animate__animated animate__fadeInDown animate__slow">
                                                                <iframe width="100%" height="100%" style="border:0;position:absolute;" allowfullscreen="" src="<?php echo $tampilResepsi['linkMaps']; ?> " class="maps-embed">
                                                                </iframe>
                                                            </div>
                                                            <button class="btn-maps btn btn-sm btn-pilled btn-block btn-accent mt-1 mb-4">Edit Denah Lokasi</button>
                                                            <div class="text-center animate__animated animate__fadeInUp animate__slow">

                                                                <div class="editable font-weight-bold" style="font-size:14px;"></div>
                                                                <div class="editable mb-3" style="font-size:14px;">
                                                                    <?php
                                                                    $lokasi = mysqli_query($conn, "SELECT * FROM resepsi");
                                                                    while ($infoLokasi = mysqli_fetch_array($lokasi)) {
                                                                        echo "<div class='editable font-weight-bold' style='font-size:14.4px;' >" . $infoLokasi['namaGedung'] . "</div>";
                                                                        echo $infoLokasi['alamatResepsi'];
                                                                    ?>

                                                                        <br />
                                                                </div>
                                                                <a href="<?php echo $tampilResepsi['linkMapspetunjuk']; ?>" class="btn-maps-link mx-auto btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" target="_blank" style="gap:8px;max-width:200px;" rel="noreferrer noopener">
                                                                    Petunjuk Ke Lokasi</a>
                                                            </div>

                                                        <?php } ?>
                                                    <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile " style="background-image: url(https://satumomen.com/themes/javanese-wayang/bg.webp); ;">
                                            <div class="frame">
                                                <img class="frame-bl animate__animated animate__fadeInLeft animate__slower" src=imgs/middle-left.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInRight animate__slower" src=imgs/middle-right.png alt="frame">
                                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slow" src=imgs/frame-tl.png alt="frame">
                                                <img class="frame-tr animate__animated animate__fadeInTopRight animate__slow" src=imgs/frame-tr.png alt="frame">
                                                <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slow" src=imgs/frame-bl.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slow" src=imgs/frame-br.png alt="frame">
                                                <img class="frame-tl h-100 frame-out animate__animated animate__slideOutLeft animate__slow" src=imgs/kiri.png alt="frame">
                                                <img class="frame-tr h-100 frame-out animate__animated animate__slideOutRight animate__slow" src=imgs/kanan.png alt="frame">
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center" style="height:100%;">
                                                <div style="width:100%;">
                                                    <div class="text-center mb-4 animate__animated animate__fadeInDown animate__slower">
                                                        <div class="h4 mb-2 editable font-weight-bold font-accent" style="font-size:18px;line-height:2;">Galeri</div>
                                                    </div>
                                                    <div class="gallery-container">
                                                        <!-- PHP Loop untuk menampilkan gambar -->
                                                        <?php
                                                        // Ambil data dari database untuk semua gambar
                                                        $galeri = mysqli_query($conn, "SELECT * FROM galery");
                                                        $counter = 1; // Counter untuk mengontrol urutan gambar
                                                        while ($infoGaleri = mysqli_fetch_array($galeri)) {
                                                        ?>
                                                            <!-- Gambar Galeri -->
                                                            <div class="gallery-item image-item image-editable animate__animated animate__zoomIn animate__slower gallery-item-<?php echo $counter; ?>">
                                                                <div class="gallery-item-container">
                                                                    <img src="Admin/fileUpload/<?php echo $infoGaleri['namaFile']; ?>" alt="Gambar Galeri" class="gallery-image gallery-image-<?php echo $counter; ?>" />
                                                                </div>
                                                            </div>
                                                        <?php
                                                            $counter++; // Menambah counter untuk gambar berikutnya
                                                        } // Akhir while loop
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                    <li class="satumomen_slide">
                                        <div class="container-mobile " style="background-image: url(https://satumomen.com/themes/javanese-wayang/bg.webp); ;">
                                            <div class="frame">
                                                <img class="frame-bl animate__animated animate__fadeInLeft animate__slower" src=imgs/middle-left.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInRight animate__slower" src=imgs/middle-right.png alt="frame">
                                                <img class="frame-tl animate__animated animate__fadeInTopLeft animate__slow" src=imgs/frame-tl.png alt="frame">
                                                <img class="frame-tr animate__animated animate__fadeInTopRight animate__slow" src=imgs/frame-tr.png alt="frame">
                                                <img class="frame-bl animate__animated animate__fadeInBottomLeft animate__slow" src=imgs/frame-bl.png alt="frame">
                                                <img class="frame-br animate__animated animate__fadeInBottomRight animate__slow" src=imgs/frame-br.png alt="frame">
                                                <img class="frame-tl h-100 frame-out animate__animated animate__slideOutLeft animate__slow" src=imgs/kiri.png alt="frame">
                                                <img class="frame-tr h-100 frame-out animate__animated animate__slideOutRight animate__slow" src=imgs/kanan.png alt="frame">
                                            </div>
                                            <div class="watermark d-flex flex-column" style="height:100%;">
                                                <div class="mt-auto" style="width:100%;">
                                                    <div class="text-center">

                                                        <div class="editable mb-2 animate__animated animate__fadeInDown animate__slower" style="font-size:14px;">Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do'a restu kepada kedua mempelai.</div>
                                                        <div class="editable mb-3 animate__animated animate__fadeInDown animate__slower" style="font-size:16px; font-size:20px; font-family: 'Caveat', sans-serif;">Wassalamu'alaikum Warahmatullahi Wabarakatuh</div>
                                                        <div class="editable font-italic animate__animated animate__fadeInDown animate__slow" style="font-size:14px;">Turut Mengundang</div>

                                                        <div class="editable h4 color-accent animate__animated animate__fadeInDown animate__slow" style="font-size:11px;">Seluruh Keluarga Besar Kedua Mempelai</div>

                                                    </div>
                                                </div>
                                                <div class="watermark-placeholder text-center mb-auto mb-5 pb-5"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="smMenu" class="satumomen_menu">
                            <ul class="satumomen_menu_list">
                                <li class="satumomen_menu_item">
                                    <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Opening</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v4.997a.31.31 0 0 1-.068.113c-.08.098-.213.207-.378.301-.947.543-1.713 1.54-2.191 2.488A6.237 6.237 0 0 0 4.82 14.4c-.1.48-.138 1.031.018 1.539C5.12 16.846 6.02 17 6.414 17H11v3a1 1 0 1 0 2 0v-3h4.586c.395 0 1.295-.154 1.575-1.061.156-.508.118-1.059.017-1.539a6.241 6.241 0 0 0-.541-1.5c-.479-.95-1.244-1.946-2.191-2.489a1.393 1.393 0 0 1-.378-.301.309.309 0 0 1-.068-.113V5h1a1 1 0 1 0 0-2H7a1 1 0 1 0 0 2h1Z" />
                                    </svg>
                                    <span>Quotes</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Salam</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                    </svg>
                                    <span>Mempelai</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Acara</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M5 9a7 7 0 1 1 8 6.93V21a1 1 0 1 1-2 0v-5.07A7.001 7.001 0 0 1 5 9Zm5.94-1.06A1.5 1.5 0 0 1 12 7.5a1 1 0 1 0 0-2A3.5 3.5 0 0 0 8.5 9a1 1 0 0 0 2 0c0-.398.158-.78.44-1.06Z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Maps</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm.394 9.553a1 1 0 0 0-1.817.062l-2.5 6A1 1 0 0 0 8 19h8a1 1 0 0 0 .894-1.447l-2-4A1 1 0 0 0 13.2 13.4l-.53.706-1.276-2.553ZM13 9.5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Gallery</span>
                                </li>
                                <li class="satumomen_menu_item">
                                    <svg class="w-[26px] h-[26px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M15.03 9.684h3.965c.322 0 .64.08.925.232.286.153.532.374.717.645a2.109 2.109 0 0 1 .242 1.883l-2.36 7.201c-.288.814-.48 1.355-1.884 1.355-2.072 0-4.276-.677-6.157-1.256-.472-.145-.924-.284-1.348-.404h-.115V9.478a25.485 25.485 0 0 0 4.238-5.514 1.8 1.8 0 0 1 .901-.83 1.74 1.74 0 0 1 1.21-.048c.396.13.736.397.96.757.225.36.32.788.269 1.211l-1.562 4.63ZM4.177 10H7v8a2 2 0 1 1-4 0v-6.823C3 10.527 3.527 10 4.176 10Z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Thanks</span>
                                </li>
                            </ul>
                        </div>
                        <!-- end invitation -->
                        <div class="floating-action d-flex align-items-end flex-column">
                            <button id="btnMusic" onclick="if (!window.__cfRLUnblockHandlers) return false; playMusic()" class="btn btn-float " data-cf-modified-12f612a15ba320b811cdf701-="">
                                <svg class="play" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M184,152V104a8,8,0,0,1,16,0v48a8,8,0,0,1-16,0Zm40-72a8,8,0,0,0-8,8v80a8,8,0,0,0,16,0V88A8,8,0,0,0,224,80ZM53.92,34.62A8,8,0,1,0,42.08,45.38L73.55,80H32A16,16,0,0,0,16,96v64a16,16,0,0,0,16,16H77.25l69.84,54.31A8,8,0,0,0,160,224V175.09l42.08,46.29a8,8,0,1,0,11.84-10.76Zm92.16,77.59A8,8,0,0,0,160,106.83V32a8,8,0,0,0-12.91-6.31l-39.85,31a8,8,0,0,0-1,11.7Z"></path>
                                </svg>
                                <svg class="pause" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M160,32V224a8,8,0,0,1-12.91,6.31L77.25,176H32a16,16,0,0,1-16-16V96A16,16,0,0,1,32,80H77.25l69.84-54.31A8,8,0,0,1,160,32Zm32,64a8,8,0,0,0-8,8v48a8,8,0,0,0,16,0V104A8,8,0,0,0,192,96Zm32-16a8,8,0,0,0-8,8v80a8,8,0,0,0,16,0V88A8,8,0,0,0,224,80Z"></path>
                                </svg>
                            </button>
                            <button id="btnAutoplay" class="btn btn-float ">
                                <svg class="play" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M128,24A104,104,0,1,0,232,128,104.13,104.13,0,0,0,128,24Zm36.44,110.66-48,32A8.05,8.05,0,0,1,112,168a8,8,0,0,1-8-8V96a8,8,0,0,1,12.44-6.66l48,32a8,8,0,0,1,0,13.32Z"></path>
                                </svg>
                                <svg class="pause" xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M128,24A104,104,0,1,0,232,128,104.13,104.13,0,0,0,128,24ZM112,160a8,8,0,0,1-16,0V96a8,8,0,0,1,16,0Zm48,0a8,8,0,0,1-16,0V96a8,8,0,0,1,16,0Z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- lightbox -->
        <div id="lightboxWrapper" class="lightbox-wrapper">
            <div class="lightbox-list"></div>
            <a href="#" id="lightboxCloseBtn" class="btn-lightbox">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 0 1 1.414 0L10 8.586l4.293-4.293a1 1 0 1 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 0 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 0 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 0-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <div class="lightbox-navigation">
                <a href="#" id="lightboxPrevBtn" class="lightbox-arrow" data-index="0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
                    </svg>
                </a>
                <a href="#" id="lightboxNextBtn" class="lightbox-arrow" data-index="0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- end lightbox -->
        <!-- startQRModal -->
        <div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="qrModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="height:100%">
                    <div style="width: 100%;aspect-ratio: 16/9; background-size:cover; background-position: center; background-image: url(https://assets.satumomen.com/images/invitation/cover-4105361730356206.jpg);"></div>
                    <div class="text-center py-4 px-4">
                        <div>
                            <div class="mx-auto">

                                <!-- xml version="1.0" encoding="UTF-8" -->
                                <!-- <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="180" height="180" viewBox="0 0 180 180"><rect x="0" y="0" width="180" height="180" fill="#ffffff"/><g transform="scale(7.2)"><g transform="translate(0,0)"><path fill-rule="evenodd" d="M8 0L8 1L9 1L9 2L10 2L10 3L11 3L11 1L13 1L13 0L11 0L11 1L9 1L9 0ZM14 0L14 1L15 1L15 0ZM16 0L16 1L17 1L17 0ZM12 2L12 4L11 4L11 5L10 5L10 4L9 4L9 5L10 5L10 8L9 8L9 6L8 6L8 8L9 8L9 10L8 10L8 11L7 11L7 10L6 10L6 11L5 11L5 8L3 8L3 9L4 9L4 12L5 12L5 13L3 13L3 10L2 10L2 8L0 8L0 11L1 11L1 12L0 12L0 17L1 17L1 15L3 15L3 16L2 16L2 17L7 17L7 16L6 16L6 15L8 15L8 18L9 18L9 20L8 20L8 22L9 22L9 20L10 20L10 23L8 23L8 25L9 25L9 24L10 24L10 23L11 23L11 20L10 20L10 19L12 19L12 21L14 21L14 24L13 24L13 25L15 25L15 22L16 22L16 23L17 23L17 22L19 22L19 21L21 21L21 16L22 16L22 18L24 18L24 19L23 19L23 22L20 22L20 23L18 23L18 25L19 25L19 24L21 24L21 25L22 25L22 24L24 24L24 25L25 25L25 18L24 18L24 16L25 16L25 14L24 14L24 13L25 13L25 10L24 10L24 9L25 9L25 8L24 8L24 9L19 9L19 8L18 8L18 9L19 9L19 10L16 10L16 9L17 9L17 6L16 6L16 8L14 8L14 7L15 7L15 6L14 6L14 5L15 5L15 4L16 4L16 5L17 5L17 3L15 3L15 4L14 4L14 2ZM12 4L12 5L11 5L11 7L12 7L12 9L10 9L10 10L9 10L9 11L10 11L10 10L12 10L12 11L13 11L13 13L11 13L11 12L10 12L10 13L9 13L9 14L8 14L8 12L7 12L7 11L6 11L6 12L7 12L7 13L6 13L6 14L3 14L3 15L4 15L4 16L5 16L5 15L6 15L6 14L8 14L8 15L9 15L9 14L10 14L10 15L11 15L11 14L14 14L14 13L16 13L16 12L17 12L17 13L18 13L18 14L19 14L19 15L20 15L20 16L21 16L21 15L20 15L20 13L21 13L21 14L23 14L23 13L24 13L24 12L21 12L21 10L20 10L20 11L19 11L19 13L18 13L18 11L15 11L15 10L14 10L14 11L13 11L13 10L12 10L12 9L14 9L14 8L13 8L13 7L14 7L14 6L13 6L13 7L12 7L12 5L14 5L14 4ZM6 8L6 9L7 9L7 8ZM22 10L22 11L24 11L24 10ZM14 11L14 12L15 12L15 11ZM1 13L1 14L2 14L2 13ZM16 14L16 16L15 16L15 15L12 15L12 16L9 16L9 17L14 17L14 18L12 18L12 19L13 19L13 20L14 20L14 19L16 19L16 16L18 16L18 15L17 15L17 14ZM23 15L23 16L24 16L24 15ZM14 16L14 17L15 17L15 16ZM17 17L17 20L20 20L20 17ZM18 18L18 19L19 19L19 18ZM12 22L12 23L13 23L13 22ZM21 23L21 24L22 24L22 23ZM16 24L16 25L17 25L17 24ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM18 0L18 7L25 7L25 0ZM19 1L19 6L24 6L24 1ZM20 2L20 5L23 5L23 2ZM0 18L0 25L7 25L7 18ZM1 19L1 24L6 24L6 19ZM2 20L2 23L5 23L5 20Z" fill="#000000"/></g></g></svg> -->

                                <div style="margin-top: 10px; text-align: center"></div>
                            </div>
                        </div>
                    </div>
                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; closeModal(qrModal)" type="button" class="btn btn-close" data-cf-modified-12f612a15ba320b811cdf701-=""><svg
                            xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 18 6M6 6l12 12" />
                        </svg></button>
                </div>
            </div>
        </div>
        <!-- endQRModal -->
        <!-- startRSVPModal -->
        <div class="modal fade" id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content p-4" style="height:100%">
                    <!-- rsvp form -->
                    <rsvp-component :lang="{&quot;invitation_code&quot;:&quot;Kode Undangan&quot;,&quot;validate_code&quot;:&quot;Validasi Kode Undangan&quot;,&quot;name&quot;:&quot;Nama&quot;,&quot;group_name&quot;:&quot;Nama Grup&quot;,&quot;phone&quot;:&quot;No Hp \/ WhatsApp&quot;,&quot;attendance&quot;:&quot;Kehadiran?&quot;,&quot;yes&quot;:&quot;Hadir&quot;,&quot;no&quot;:&quot;Tidak Hadir&quot;,&quot;guest&quot;:&quot;Orang&quot;,&quot;guest_count&quot;:&quot;Jumlah Tamu&quot;,&quot;comment&quot;:&quot;Komentar atau Ucapan&quot;,&quot;send&quot;:&quot;Kirim&quot;,&quot;update&quot;:&quot;Kirim&quot;,&quot;captcha_placeholder&quot;:&quot;Ketik Text&quot;}" :invitation_id="410536" name="" code="" :replace="true" overlay="1"></rsvp-component>
                    <!-- rsvp form -->
                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; closeModal(rsvpModal)" type="button" class="btn btn-close" data-cf-modified-12f612a15ba320b811cdf701-=""><svg
                            xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 18 6M6 6l12 12" />
                        </svg></button>
                </div>
            </div>
        </div>
        <!-- endRSVPModal -->
        <!-- watermark -->
        <div id="waterMark" class="mt-5" style="display: none">
            <p class="mb-1 animate__animated animate__fadeInUp animate__slower small animate__delay-1s">Made with love by</p>
            <div class="d-flex justify-content-center animate__animated animate__fadeInUp animate__slower animate__delay-2s">
                <div class="list-icon p-2">
                    <a href="https://wa.me/085134200114" target="_BLANK" class="icon d-block">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd" />
                            <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                        </svg>

                    </a>
                </div>
                <div class="list-icon p-2">
                    <a href="https://instagram.com/ilhmnrwyy/" target="_BLANK" class="icon d-block">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div class="list-icon p-2">
                    <a href="https://www.youtube.com/@ilhamnurwiyahya9151" target="_BLANK" class="icon d-block">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="text-center animate__animated animate__fadeInUp animate__slower animate__delay-3s">
                <!-- <a class="d-block mx-auto" href="https://aboutham.my.id/" target="_blank" rel="noopener noreferrer" style="width: 100px; height: 40px"> -->
                <!-- <img height="40" width="100" class="h-100 w-100" style="object-fit: contain" src=imgs/logo-light.png alt="Logo TekoMantan"> -->
                </a>
            </div>
        </div>
        <!-- end watermark -->
    </main>
    <!-- not support modal -->
    <div class="modal fade" id="notSupport" tabindex="-1" role="dialog" aria-labelledby="notSupport" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: .8rem;">
                <div class="modal-body text-center justify-content-center align-items-center">
                    <h2>Pemberitahuan</h2>
                    <p>Browser yang kamu gunakan mungkin kurang kompatibel. Beberapa fungsi undangan ini mungkin tidak dapat berjalan dengan baik. Kami merekomendasikan Chrome. Klik tombol dibawah ini untuk mendownload.</p>
                    <div class="d-flex justify-content-center">
                        <a href="https://apps.apple.com/id/app/google-chrome/id535886823" class="btn p-1" target="_BLANK">
                            <img src=imgs/btn_app_store.png alt="AppStore" height="40px">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.android.chrome&hl=in&gl=US" class="btn p-1" target="_BLANK">
                            <img src=imgs/btn_play_store.png alt="PlayStore" height="40px">
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary btn-block rounded-pill" onclick="if (!window.__cfRLUnblockHandlers) return false; closeModal(notSupport)" data-cf-modified-12f612a15ba320b811cdf701-="">Tetap Akses</button>
                </div>
            </div>
        </div>
    </div>
    <!-- not support modal -->

    <!-- start script -->
    <!-- <script src="assets/js/theme-apphome.js?v=080386"></script> -->
    <script src="assets/js/themesv2home.js?v=080386"></script>
    <script type="12f612a15ba320b811cdf701-text/javascript">
        var notSupport = document.getElementById('notSupport');

        function checkBrowser() {
            if (navigator.userAgent.indexOf("UCBrowser") != -1 || navigator.userAgent.indexOf("MiuiBrowser") != -1 || navigator.userAgent.indexOf("OppoBrowser") != -1) {
                showModal(notSupport);
                if (loader) {
                    loader.style.display = "none";
                }
            }
        }
        checkBrowser()
    </script>
    <script>
        // Ambil elemen countdown
        const countdownElement = document.querySelector('.countdown-wrapper');

        // Ambil tanggal dari atribut data-datetime
        const targetDate = new Date(countdownElement.getAttribute('data-datetime'));
        console.log(targetDate); // Debugging, pastikan targetDate valid

        // Pastikan targetDate adalah angka yang valid
        if (isNaN(targetDate)) {
            console.error("Tanggal tidak valid:", countdownElement.getAttribute('data-datetime'));
        } else {
            // Update countdown setiap detik
            const countdownInterval = setInterval(function() {
                const now = new Date().getTime();
                const timeRemaining = targetDate - now;

                // Hitung hari, jam, menit, dan detik
                const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                // Update tampilan countdown
                countdownElement.querySelector('.countdown-item.day .number').textContent = days;
                countdownElement.querySelector('.countdown-item.hour .number').textContent = hours;
                countdownElement.querySelector('.countdown-item.minute .number').textContent = minutes;
                countdownElement.querySelector('.countdown-item.second .number').textContent = seconds;

                // Jika countdown selesai
                if (timeRemaining < 0) {
                    clearInterval(countdownInterval);
                    countdownElement.querySelector('.countdown').innerHTML = "Waktu Habis";
                }
            }, 1000);
        }
    </script>

    <!-- end script -->
    <script type="12f612a15ba320b811cdf701-text/javascript">

    </script>
    <script src="assets/js/rocket-loader.minhome.js"></script>

</html>