<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Delta Salon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/frontend/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/frontend/css/nice-select.css">
    <link rel="stylesheet" href="/assets/frontend/css/flaticon.css">
    <link rel="stylesheet" href="/assets/frontend/css/gijgo.css">
    <link rel="stylesheet" href="/assets/frontend/css/animate.css">
    <link rel="stylesheet" href="/assets/frontend/css/slicknav.css">
    <link rel="stylesheet" href="/assets/frontend/css/style.css">
    <!-- <link rel="stylesheet" href="/assets/frontend/css/responsive.css"> -->
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
                                    <img src="/assets/frontend/images/logo.png" alt="" width="60%">
                                    </a>
                                </div>
                            </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
								<ul id="navigation">
                                        <li><a class="active" href="/">home</a></li>
                                        <li><a href="/layanan">Layanan</a></li>
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

    <!-- bradcam_area_start -->
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>Delta Salon</h3>
                            <p>Produk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- bradcam_area_end -->
<br>
<br>
<section class="blog_area section-padding">
        <div class="container">
            <div class="row">
            <div class="col-xl-12">
                <div class="section_title2 text-center mb-90">
                    <h3>Produk yang kami jual</h3>
                </div>
                </div>
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                    @foreach($produk as $data)
                    <article class="blog_item">
                            <img src="{{ asset('assets/img/produk/'.$data->Gambar) }}" alt="" width="60%">

                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.html">
                                <h2>{{$data->Nama_produk}}</h2>
                            </a>
                            <p>{{$data->Deskripsi}}</p>
                        </div>
                    </article>
                    @endforeach

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="/produk/search" method="get">
                            {{csrf_field()}}
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input name="search" type="text" class="form-control" placeholder='Search Produk'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Produk'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategori</h4>
                            @foreach($kategori as $data)
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>{{$data->Nama_kategori}}</p>
                                    </a>
                                </li>
                            </ul>
                            @endforeach
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <script src="/assets/frontend/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/assets/frontend/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/frontend/js/popper.min.js"></script>
    <script src="/assets/frontend/js/bootstrap.min.js"></script>
    <script src="/assets/frontend/js/owl.carousel.min.js"></script>
    <script src="/assets/frontend/js/isotope.pkgd.min.js"></script>
    <script src="/assets/frontend/js/ajax-form.js"></script>
    <script src="/assets/frontend/js/waypoints.min.js"></script>
    <script src="/assets/frontend/js/jquery.counterup.min.js"></script>
    <script src="/assets/frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/frontend/js/scrollIt.js"></script>
    <script src="/assets/frontend/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/frontend/js/wow.min.js"></script>
    <script src="/assets/frontend/js/nice-select.min.js"></script>
    <script src="/assets/frontend/js/jquery.slicknav.min.js"></script>
    <script src="/assets/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/frontend/js/plugins.js"></script>
    <script src="/assets/frontend/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="/assets/frontend/js/contact.js"></script>
    <script src="/assets/frontend/js/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/frontend/js/jquery.form.js"></script>
    <script src="/assets/frontend/js/jquery.validate.min.js"></script>
    <script src="/assets/frontend/js/mail-script.js"></script>

    <script src="/assets/frontend/js/main.js"></script>
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