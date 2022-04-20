<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>MitraJamur</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
                </div>
                <div class="col-sm-6">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link" href="/user/dashboard">Beranda</a>
                                <a class="nav-item nav-link" href="/login">Produk</a>
                                <a class="nav-item nav-link" href="/login">Workshop</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="banner_section">
            <div class="container-fluid">
                <section class="slide-wrapper">
                    <div class="container-fluid">

                        <!-- Wrapper for slides -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="banner_taital">
                                    <h1 class="banner_text">Selamat Datang </h1>
                                    <h1 class="mens_text"><strong>MitraJamur.id</strong></h1>
                                    <p class="lorem_text">Mitra Jamur Indonesia adalah sebuah pusat penelitian, penyediaan dan pengelolaan jamur terpadu yang terletak di Kecamatan Gebang, Kota Jember, Jawa Timur</p>
                                    <a class="btn btn-primary" href="/login">Login</a>
                                    <a class="btn btn-secondary" href="/register">Register</a>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="shoes_img"><img src="{{asset('images/mushroom.png')}}"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- new collection section start -->
    <div class="collection_section layout_padding">
        <div class="container">
            <h1 class="new_text"><strong>Produk Jamur Terbaru</strong></h1>
            <p class="consectetur_text">Berikut ini merupakan beberapa produk jamur terbaru kami. Produk ini sangat direkomendasikan untuk anda. Belanja sekarang juga!</p>
        </div>
    </div>
    <!-- new collection section end -->
    <!-- New Arrivals section start -->
    <div class="layout_padding gallery_section">
        <div class="container">
        <h1 class="new_text text-center"><strong>New Products</strong></h1>
            @php
            use App\Models\Produk;
            $data=Produk::select('id','namaProduk','gambarProduk','stokProduk','hargaProduk')->limit(3)->get();
            @endphp
            <div class="row">
                @foreach($data as $dt)
                <div class="col-sm-4">
                    <div class="best_shoes">
                        <p class="best_text">{{$dt->namaProduk}} </p>
                        <div class="shoes_icon">
                            <img src="{{ asset('foto-produk/'.$dt->gambarProduk) }}" style="width: 150px;" alt="">
                        </div>
                        <div class="star_text">
                            <div class="left_part">
                                <p class="best_text">Stok tersisa: {{$dt->stokProduk}} </p>
                            </div>
                            <div class="right_part mt-3">
                                <div class="shoes_price">{{number_format($dt->hargaProduk)}}</div>
                            </div>
                            <div class="text-right">
                                <a href="/login" class="btn btn-primary btn-sm">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="buy_now_bt">
                <button class="buy_text" onclick="location.href='/login'">Shop Now</button>
            </div>
        </div>
    </div>
    <div class="collection_section layout_padding">
        <div class="container">
            <h1 class="new_text"><strong>Workshop Realtime</strong></h1>
            <p class="consectetur_text">Berikut ini merupakan beberapa kegiatan workshop yang kami selenggarakan. Workshop ini sangat direkomendasikan bagi anda pecinta dunia kuliner terutama pada jamur. Ayo daftar dan ikuti sekarang juga!</p>
        </div>
    </div>
    <!-- New Arrivals section end -->
    <div class="layout_padding gallery_section">
        <div class="container">
        <h1 class="new_text text-center"><strong>Recommended Workshop</strong></h1>
            @php
            use App\Models\Workshop;
            $data=Workshop::select('id','namaWorkshop','gambarWorkshop','waktuWorkshop','hargaWorkshop')->limit(3)->get();
            @endphp
            <div class="row">
                @foreach($data as $dt)
                <div class="col-sm-4">
                    <div class="best_shoes">
                        <p class="best_text">{{$dt->namaWorkshop}} </p>
                        <div class="shoes_icon">
                            <img src="{{ asset('foto-workshop/'.$dt->gambarWorkshop) }}" style="width: 150px;" alt="">
                        </div>
                        <div class="star_text">
                            <div class="left_part">
                                <p class="best_text">Date: {{$dt->waktuWorkshop}} </p>
                            </div>
                            <div class="right_part mt-3">
                                <div class="shoes_price">{{number_format($dt->hargaWorkshop)}}</div>
                            </div>
                            <div class="text-right">
                                <a href="/login" class="btn btn-primary btn-sm">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="buy_now_bt">
                <button class="buy_text" onclick="location.href='/login'">Join Now</button>
            </div>
        </div>
    </div>
    
    <!-- section footer start -->
    <div class="section_footer">
        <div class="container">
            <div class="mail_section">
                <div class="row">
                    <div class="col-sm-6 col-lg-2">
                        <div><a href="#"><img src="images/footer-logo.png"></a></div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(71) 1234567890</span></div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-logo"><img src="images/email-icon.png"><span class="map_text">Demo@gmail.com</span></div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="social_icon">
                            <ul>
                                <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                <li><a href="#"><img src="images/in-icon.png"></a></li>
                                <li><a href="#"><img src="images/google-icon.png"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-sm-4 col-lg-2">
                        <p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur ipsum dolor sit amet,</p>
                    </div>
                    <div class="col-sm-4 col-lg-2">
                        <h2 class="shop_text">Address </h2>
                        <div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
                    </div>
                    <div class="col-sm-4 col-md-6 col-lg-3">
                        <h2 class="shop_text">Our Company </h2>
                        <div class="delivery_text">
                            <ul>
                                <li>Delivery</li>
                                <li>Legal Notice</li>
                                <li>About us</li>
                                <li>Secure payment</li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h2 class="adderess_text">Products</h2>
                        <div class="delivery_text">
                            <ul>
                                <li>Prices drop</li>
                                <li>New products</li>
                                <li>Best sales</li>
                                <li>Contact us</li>
                                <li>Sitemap</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <h2 class="adderess_text">Newsletter</h2>
                        <div class="form-group">
                            <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                        </div>
                        <button class="subscribr_bt">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- section footer end -->
    <div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html Templates</a></div>


    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });


            $('#myCarousel').carousel({
                interval: false
            });

            //scroll slides on swipe for touch enabled devices

            $("#myCarousel").on("touchstart", function(event) {

                var yClick = event.originalEvent.touches[0].pageY;
                $(this).one("touchmove", function(event) {

                    var yMove = event.originalEvent.touches[0].pageY;
                    if (Math.floor(yClick - yMove) > 1) {
                        $(".carousel").carousel('next');
                    } else if (Math.floor(yClick - yMove) < -1) {
                        $(".carousel").carousel('prev');
                    }
                });
                $(".carousel").on("touchend", function() {
                    $(this).off("touchmove");
                });
            });
        });
    </script>
</body>

</html>