<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Delta Salon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/frontend/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/frontend/css/themify-icons.css">
    <link rel="stylesheet" href="assets/frontend/css/nice-select.css">
    <link rel="stylesheet" href="assets/frontend/css/flaticon.css">
    <link rel="stylesheet" href="assets/frontend/css/gijgo.css">
    <link rel="stylesheet" href="assets/frontend/css/animate.css">
    <link rel="stylesheet" href="assets/frontend/css/slicknav.css">
    <link rel="stylesheet" href="assets/frontend/css/style.css">
    <!-- <link rel="stylesheet" href="assets/frontend/css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo-img">
                                    <a href="/">
                                        <img src="assets/frontend/images/logo.png" alt="" width="60%">
                                    </a>
                                </div>
                            </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="/">home</a></li>
                                        <li><a  class="active" href="#">Layanan<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="layanan">Rambut</a></li>
                                                    <li><a href="layanan1">Wajah</a></li>
                                                </ul>
                                            </li>
										<li><a href="/galleri">Galleri</a></li>
										<li><a href="/produk">Produk</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>Delta Salon</h3>
                            <p>Beauty Salon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about_thumb">
                        <img src="assets/frontend/images/bg1_1.jpg" alt="">
                        <div class="opening_hour text-center">
                                <i class="flaticon-clock"></i>
                                @foreach($jambuka as $data)
                                <h3>{{$data->Hari}}</h3>
                                <p>{{$data->Jam_buka}}-{{$data->Jam_tutup}}</p>
                                @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Tentang</span>
                            <h3>Delta Salon</h3>
                        </div>
                        <p>Salon adalah salah satu usaha yang berhubungan dengan perawatan kosmetika, wajah, rambut. baik untuk laki laki
							maupun perempuan. Namun delta salon hanya melayani perawatan rambut yang khusus untuk perempuan. bukan itu saja,
							delta salon juga bisa melayani jasa makeup yang kalian butuhkan.
						</p>
                    </div>
                </div>
            </div>
        </div>
	</div>

    <!-- find_us_area start -->
    <div class="find_us_area find_bg_1 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 offset-xl-7 col-lg-6 offset-lg-6">
                    <div class="find_info">
                        <h3 class="find_info_title">Ada pertanyaan?</h3>
                        <div class="single_find d-flex">
                            <div class="icon">
                                <i class="flaticon-placeholder"></i>
                            </div>
                            <div class="find_text">
                                    <h3>Lokasi</h3>
                                    <p>Jl. Pasawahan Ruko B</p>
                            </div>
                        </div>
                        <div class="single_find d-flex">
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="find_text">
                                    <h3>Telephone</h3>
                                    <p>0863 3456 6880</p>
                            </div>
                        </div>
                        <div class="single_find d-flex">
                            <div class="icon">
                                <i class="flaticon-paper-plane"></i>
                            </div>
                            <div class="find_text">
                                    <h3>E-mail</h3>
                                    <p>Deltasalon@beautysalon.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- find_us_area_end -->

    <!-- footer -->
    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-12 col-lg-">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Delta Salon
                                </h3>
                                <p class="footer_text doanar"> <a class="first" href="#">bla bla</a> <br>
                               </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Alamat
                                </h3>
                                <p class="footer_text">Jl. Pasawahan Ruko B<br>
                                    0875 5679 9743 <br>
                                    <a class="domain" href="#"></a>Deltasalon@beautysalon.com</p>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-whatsapp"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12 col-lg-4">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Navigasi
                                </h3>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Layanan</a></li>
									<li><a href="#">Galleri</a></li>
									<li><a href="#">Produk</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- footer -->
    <!-- link that opens popup -->


    <!-- JS here -->
    <script src="assets/frontend/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/frontend/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/frontend/js/popper.min.js"></script>
    <script src="assets/frontend/js/bootstrap.min.js"></script>
    <script src="assets/frontend/js/owl.carousel.min.js"></script>
    <script src="assets/frontend/js/isotope.pkgd.min.js"></script>
    <script src="assets/frontend/js/ajax-form.js"></script>
    <script src="assets/frontend/js/waypoints.min.js"></script>
    <script src="assets/frontend/js/jquery.counterup.min.js"></script>
    <script src="assets/frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/frontend/js/scrollIt.js"></script>
    <script src="assets/frontend/js/jquery.scrollUp.min.js"></script>
    <script src="assets/frontend/js/wow.min.js"></script>
    <script src="assets/frontend/js/nice-select.min.js"></script>
    <script src="assets/frontend/js/jquery.slicknav.min.js"></script>
    <script src="assets/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/frontend/js/plugins.js"></script>
    <script src="assets/frontend/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="assets/frontend/js/contact.js"></script>
    <script src="assets/frontend/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/frontend/js/jquery.form.js"></script>
    <script src="assets/frontend/js/jquery.validate.min.js"></script>
    <script src="assets/frontend/js/mail-script.js"></script>

    <script src="assets/frontend/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>

</html>