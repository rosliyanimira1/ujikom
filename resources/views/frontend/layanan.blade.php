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
                            <div class="col-xl-6 col-lg-3">
                                <div class="logo-img">
                                    <a href="/">
                                    <img src="assets/frontend/images/logo.png" alt="" width="40%">
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

    <!-- service_area_start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title3 padding_plus text-center mb-90">
                        <h3>Layanan Rambut</h3>
                    </div>
                </div>
            </div>
            <div class="white_bg_pos">
                    <div class="row">
                    @foreach ($layanan as $data)
                            <div class="col-xl-6">
                                
                                <div class="single_service d-flex justify-content-between align-items-center">
                                    <div class="service_inner d-flex align-items-center">
                                        <div class="thumb">
                                            
                                            <img src="{{ asset('assets/img/layanan/'.$data->Gambar) }}" alt="{{ $data->nama_layanan }}" style="width:60px;height:60px">

                                        </div>
                                        <span>{{ $data->nama_layanan }}</span>
                                    </div>
                                    <p>Rp {{ $data->harga_layanan }}</p>
                                </div>
                                
                            </div>
                            @endforeach
                                <!-- <div class="single_service d-flex justify-content-between align-items-center">
                                    <div class="service_inner d-flex align-items-center">
                                        <div class="thumb">
                                                <img src="assets/frontend/img/service/2.png" alt="">
                                                                    
                                        <span>Nama Layanan</span>
                                    </div>
                                    <p>Harga</p>
                                </div>
                                <div class="single_service d-flex justify-content-between align-items-center">
                                    <div class="service_inner d-flex align-items-center">
                                        <div class="thumb">
                                                <img src="assets/frontend/img/service/3.png" alt="">
                                        </div>
                                        <span>Nama layanan</span>
                                    </div>
                                    <p>Harga</p>
                                </div>
                                <div class="single_service d-flex justify-content-between align-items-center">
                                    <div class="service_inner d-flex align-items-center">
                                        <div class="thumb">
                                                <img src="assets/frontend/img/service/4.png" alt="">
                                        </div>
                                        <span>Nama Layanan</span>
                                    </div>
                                    <p>Harga</p>
                                </div>
                                <div class="single_service d-flex justify-content-between align-items-center">
                                    <div class="service_inner d-flex align-items-center">
                                        <div class="thumb">
                                                <img src="assets/frontend/img/service/5.png" alt="">
                                        </div>
                                        <span>Nama layanan</span>
                                    </div>
                                    <p>Harga</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="single_service d-flex justify-content-between align-items-center">
                                    <div class="service_inner d-flex align-items-center">
                                        <div class="thumb">
                                                <img src="assets/frontend/img/service/6.png" alt="">
                                        </div>
                                        <span>Nama layanan</span>
                                    </div>
                                    <p>Harga</p>
                                </div>
                                <div class="single_service d-flex justify-content-between align-items-center">
                                    <div class="service_inner d-flex align-items-center">
                                        <div class="thumb">
                                                <img src="assets/frontend/img/service/7.png" alt="">
                                        </div>
                                        <span>Nama Layanan</span>
                                    </div>
                                    <p>Harga</p>
                                </div>
                                <div class="single_service d-flex justify-content-between align-items-center">
                                    <div class="service_inner d-flex align-items-center">
                                        <div class="thumb">
                                                <img src="assets/frontend/img/service/8.png" alt="">
                                        </div>
                                        <span>Nama Layanan</span>
                                    </div>
                                    <p>Harga</p>
                                </div>
                                <div class="single_service d-flex justify-content-between align-items-center">
                                    <div class="service_inner d-flex align-items-center">
                                        <div class="thumb">
                                                <img src="assets/frontend/img/service/9.png" alt="">
                                        </div>
                                        <span>Nama Layanan</span>
                                    </div>
                                    <p>Harga</p>
                                </div>
                                <div class="single_service d-flex justify-content-between align-items-center">
                                    <div class="service_inner d-flex align-items-center">
                                        <div class="thumb">
                                                <img src="assets/frontend/img/service/10.png" alt="">
                                        </div>
                                        <span>Nama Layanan</span>
                                    </div>
                                    <p>Harga</p>
                                </div>
                            </div> -->
                        </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->
    <!-- gallery_area_start -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title2 text-center mb-90">
                        <i class="flaticon-scissors"></i>
                        <h3>Gallery</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="gallery_active owl-carousel">
                    @foreach ($layanan as $data)
                        <div class="single_gallery">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/layanan/'.$data->Gambar) }}" alt="{{ $data->nama_layanan }}">
                                <div class="image_hover">
                                    <a class="popup-image" href="{{ asset('assets/img/layanan/'.$data->Gambar) }}">
                                    <span>{{ $data->nama_layanan }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="single_gallery">
                            <div class="thumb">
                                <img src="assets/frontend/img/gallery/2.png" alt="">
                                <div class="image_hover">
                                    <a class="popup-image" href="assets/frontend/img/gallery/2.png">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="single_gallery">
                            <div class="thumb">
                                <img src="assets/frontend/img/gallery/3.png" alt="">
                                <div class="image_hover">
                                    <a class="popup-image" href="assets/frontend/img/gallery/3.png">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="single_gallery">
                            <div class="thumb">
                                <img src="assets/frontend/img/gallery/1.png" alt="">
                                <div class="image_hover">
                                    <a class="popup-image" href="assets/frontend/img/gallery/1.png">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="single_gallery">
                            <div class="thumb">
                                <img src="assets/frontend/img/gallery/2.png" alt="">
                                <div class="image_hover">
                                    <a class="popup-image" href="assets/frontend/img/gallery/2.png">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="single_gallery">
                            <div class="thumb">
                                <img src="assets/frontend/img/gallery/3.png" alt="">
                                <div class="image_hover">
                                    <a class="popup-image" href="assets/frontend/img/gallery/3.png">
                                        <i class="ti-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery_area_end -->

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
    <style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</body>

</html>