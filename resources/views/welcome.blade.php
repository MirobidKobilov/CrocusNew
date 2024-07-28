<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="assets/images/logo.svg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/fontawesome/css/all.min.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/lightbox/dist/css/lightbox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/slick/slick-theme.css">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="custom.css">
    <title>Crocus Tour</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader">
        <div class="preloader-content">
            <img src="assets/images/loader1.gif" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        <header id="masthead" class="site-header header-primary">
            <!-- header html start -->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 d-none d-lg-block">
                            <div class="header-contact-info">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-phone-alt"></i> +01 (977) 2599 12</a>
                                    </li>
                                    <li>
                                        <a href="mailto:info@Travel.com"><i class="fas fa-envelope"></i>
                                            company@domain.com</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i> 3146 Koontz Lane, California
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                            <div class="header-social social-links main-navigation-lang d-none d-lg-block">
                                <ul>
                                    <li class=" language-list menu-item-has-children">
                                        <a href="">@lang('public.lang')</a>
                                        <ul>
                                            <li>
                                                @if (app()->getLocale() != 'ru')
                                                    <a href="{{ route('lang.switch', 'ru') }}"> RUS</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if (app()->getLocale() != 'uz')
                                                    <a href="{{ route('lang.switch', 'uz') }}"> UZB</a>
                                                @endif
                                            </li>
                                            <li>
                                                @if (app()->getLocale() != 'en')
                                                    <a href="{{ route('lang.switch', 'en') }}"> ENG</a>
                                                @endif
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            {{-- <div class="header-search-icon">
                                <button class="search-icon">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header">
                <div class="container d-flex justify-content-between align-items-center">
                    <div class="site-identity">
                        <h1 class="site-title">
                            <a href="index.html">
                                <img class="white-logo" src="assets/images/logo.svg" alt="logo" style="height: 100px">
                                <img class="black-logo" src="assets/images/logo.svg" alt="logo" style="height: 100px">
                            </a>
                        </h1>
                    </div>
                    <div class="main-navigation d-none d-lg-block">
                        <nav id="navigation" class="navigation">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="#">@lang('public.company')</a>
                                    <ul>
                                        <li>
                                            <a href="destination.html">@lang('public.partners')</a>
                                        </li>
                                        <li>
                                            <a href="tour-packages.html">Tour Packages</a>
                                        </li>
                                        <li>
                                            <a href="package-offer.html">Package Offer</a>
                                        </li>
                                        <li>
                                            <a href="package-detail.html">Package Detail</a>
                                        </li>
                                        <li>
                                            <a href="tour-cart.html">Tour Cart</a>
                                        </li>
                                        <li>
                                            <a href="booking.html">Package Booking</a>
                                        </li>
                                        <li>
                                            <a href="confirmation.html">Confirmation</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">@lang('public.partners')</a>
                                </li>
                                <li>
                                    <a href="single-page.html">Shop</a>
                                </li>
                                <li> <!-- Dashbord menu-->
                                    <a href="#">Dashboard</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-btn">
                        <a href="#" class="button-primary">BOOK NOW</a>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-container"></div>
        </header>
        <main id="content" class="site-main">
            <!-- Home slider html start -->
            <section class="home-slider-section">
                <div class="home-slider">
                    <div class="home-banner-items">
                        <div class="banner-inner-wrap" style="background-image: url(assets/images/hero1.jpg);"></div>
                        <div class="banner-content-wrap">
                            <div class="container">
                                <div class="banner-content text-center">
                                    <h2 class="banner-title">TRAVELLING AROUND THE WORLD</h2>
                                    <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam,
                                        eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat
                                        sodales! Mollit. Minus exercitationem wisi.</p>
                                    <a href="#" class="button-primary">CONTINUE READING</a>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="home-banner-items">
                        <div class="banner-inner-wrap" style="background-image: url(assets/images/hero2.jpg);"></div>
                        <div class="banner-content-wrap">
                            <div class="container">
                                <div class="banner-content text-center">
                                    <h2 class="banner-title">EXPERIENCE THE NATURE'S BEAUTY</h2>
                                    <p>Taciti quasi, sagittis excepteur hymenaeos, id temporibus hic proident ullam,
                                        eaque donec delectus tempor consectetur nunc, purus congue? Rem volutpat
                                        sodales! Mollit. Minus exercitationem wisi.</p>
                                    <a href="#" class="button-primary">CONTINUE READING</a>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
            </section>
            <!-- slider html start -->
            <!-- Home search field html start -->
            <div class="trip-search-section shape-search-section">
                <div class="slider-shape"></div>
                <div class="container">
                    <div class="trip-search-inner white-bg d-flex">
                        <div class="input-group">
                            <label> Search Destination* </label>
                            <input type="text" name="s" placeholder="Enter Destination">
                        </div>
                        <div class="input-group">
                            <label> Pax Number* </label>
                            <input type="text" name="s" placeholder="No.of People">
                        </div>
                        <div class="input-group width-col-3">
                            <label> Checkin Date* </label>
                            <i class="far fa-calendar"></i>
                            <input class="input-date-picker" type="text" name="s"
                                placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                        </div>
                        <div class="input-group width-col-3">
                            <label> Checkout Date* </label>
                            <i class="far fa-calendar"></i>
                            <input class="input-date-picker" type="text" name="s"
                                placeholder="MM / DD / YY" autocomplete="off" readonly="readonly">
                        </div>
                        <div class="input-group width-col-3">
                            <label class="screen-reader-text"> Search </label>
                            <input type="submit" name="travel-search" value="INQUIRE NOW">
                        </div>
                    </div>
                </div>
            </div>
            <!-- search search field html end -->
            <section class="destination-section">
                <div class="container">
                    <div class="section-heading">
                        <div class="row align-items-end">
                            <div class="col-lg-7">
                                <h5 class="dash-style">POPULAR DESTINATION</h5>
                                <h2>TOP NOTCH DESTINATION</h2>
                            </div>
                            <div class="col-lg-5">
                                <div class="section-disc">
                                    Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea
                                    ipsum ad arcu. Nostrud. Aut nostrum, ornare quas provident laoreet nesciunt.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination-inner destination-three-column">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="assets/images/img1.jpg" alt="">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">THAILAND</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="#">Disney Land</a>
                                                </h3>
                                                <div class="rating-start" title="Rated 5 out of 4">
                                                    <span style="width: 53%"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="assets/images/img2.jpg" alt="">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">NORWAY</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="#">Besseggen Ridge</a>
                                                </h3>
                                                <div class="rating-start" title="Rated 5 out of 5">
                                                    <span style="width: 100%"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="assets/images/img3.jpg" alt="">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">NEW ZEALAND</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="#">Oxolotan City</a>
                                                </h3>
                                                <div class="rating-start" title="Rated 5 out of 5">
                                                    <span style="width: 100%"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="desti-item overlay-desti-item">
                                            <figure class="desti-image">
                                                <img src="assets/images/img4.jpg" alt="">
                                            </figure>
                                            <div class="meta-cat bg-meta-cat">
                                                <a href="#">SINGAPORE</a>
                                            </div>
                                            <div class="desti-content">
                                                <h3>
                                                    <a href="#">Marina Bay Sand City</a>
                                                </h3>
                                                <div class="rating-start" title="Rated 5 out of 4">
                                                    <span style="width: 60%"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap text-center">
                            <a href="#" class="button-primary">MORE DESTINATION</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Home packages section html start -->
            <section class="package-section">
                <div class="container">
                    <div class="section-heading text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h5 class="dash-style">EXPLORE GREAT PLACES</h5>
                                <h2>POPULAR PACKAGES</h2>
                                <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid
                                    blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum
                                    magnis maxime curae placeat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="package-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="package-wrap">
                                    <figure class="feature-image">
                                        <a href="#">
                                            <img src="assets/images/img5.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-price">
                                        <h6>
                                            <span>$1,900 </span> / per person
                                        </h6>
                                    </div>
                                    <div class="package-content-wrap">
                                        <div class="package-meta text-center">
                                            <ul>
                                                <li>
                                                    <i class="far fa-clock"></i>
                                                    7D/6N
                                                </li>
                                                <li>
                                                    <i class="fas fa-user-friends"></i>
                                                    People: 5
                                                </li>
                                                <li>
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    Malaysia
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="package-content">
                                            <h3>
                                                <a href="#">Sunset view of beautiful lakeside resident</a>
                                            </h3>
                                            <div class="review-area">
                                                <span class="review-text">(25 reviews)</span>
                                                <div class="rating-start" title="Rated 5 out of 5">
                                                    <span style="width: 60%"></span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam.
                                                Ut elit tellus, luctus nec ullam elit tellpus.</p>
                                            <div class="btn-wrap">
                                                <a href="#" class="button-text width-6">Book Now<i
                                                        class="fas fa-arrow-right"></i></a>
                                                <a href="#" class="button-text width-6">Wish List<i
                                                        class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="package-wrap">
                                    <figure class="feature-image">
                                        <a href="#">
                                            <img src="assets/images/img6.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-price">
                                        <h6>
                                            <span>$1,230 </span> / per person
                                        </h6>
                                    </div>
                                    <div class="package-content-wrap">
                                        <div class="package-meta text-center">
                                            <ul>
                                                <li>
                                                    <i class="far fa-clock"></i>
                                                    5D/4N
                                                </li>
                                                <li>
                                                    <i class="fas fa-user-friends"></i>
                                                    People: 8
                                                </li>
                                                <li>
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    Canada
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="package-content">
                                            <h3>
                                                <a href="#">Experience the natural beauty of island</a>
                                            </h3>
                                            <div class="review-area">
                                                <span class="review-text">(17 reviews)</span>
                                                <div class="rating-start" title="Rated 5 out of 5">
                                                    <span style="width: 100%"></span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam.
                                                Ut elit tellus, luctus nec ullam elit tellpus.</p>
                                            <div class="btn-wrap">
                                                <a href="#" class="button-text width-6">Book Now<i
                                                        class="fas fa-arrow-right"></i></a>
                                                <a href="#" class="button-text width-6">Wish List<i
                                                        class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="package-wrap">
                                    <figure class="feature-image">
                                        <a href="#">
                                            <img src="assets/images/img7.jpg" alt="">
                                        </a>
                                    </figure>
                                    <div class="package-price">
                                        <h6>
                                            <span>$2,000 </span> / per person
                                        </h6>
                                    </div>
                                    <div class="package-content-wrap">
                                        <div class="package-meta text-center">
                                            <ul>
                                                <li>
                                                    <i class="far fa-clock"></i>
                                                    6D/5N
                                                </li>
                                                <li>
                                                    <i class="fas fa-user-friends"></i>
                                                    People: 6
                                                </li>
                                                <li>
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    Portugal
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="package-content">
                                            <h3>
                                                <a href="#">Vacation to the water city of Portugal</a>
                                            </h3>
                                            <div class="review-area">
                                                <span class="review-text">(22 reviews)</span>
                                                <div class="rating-start" title="Rated 5 out of 5">
                                                    <span style="width: 80%"></span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam.
                                                Ut elit tellus, luctus nec ullam elit tellpus.</p>
                                            <div class="btn-wrap">
                                                <a href="#" class="button-text width-6">Book Now<i
                                                        class="fas fa-arrow-right"></i></a>
                                                <a href="#" class="button-text width-6">Wish List<i
                                                        class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap text-center">
                            <a href="#" class="button-primary">VIEW ALL PACKAGES</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- packages html end -->
            <!-- Home callback section html start -->
            <section class="callback-section">
                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-5">
                            <div class="callback-img" style="background-image: url(assets/images/img8.jpg);">
                                <div class="video-button">
                                    <a id="video-container" data-video-id="IUN664s7N-c">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="callback-inner">
                                <div class="section-heading section-heading-white">
                                    <h5 class="dash-style">CALLBACK FOR MORE</h5>
                                    <h2>GO TRAVEL. DISCOVER. REMEMBER US!!</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend.
                                    </p>
                                </div>
                                <div class="callback-counter-wrap">
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="assets/images/icon1.png" alt="">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-no">
                                                <span class="counter">500</span>K+
                                            </span>
                                            <span class="counter-text">
                                                Satisfied Clients
                                            </span>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="assets/images/icon2.png" alt="">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-no">
                                                <span class="counter">250</span>K+
                                            </span>
                                            <span class="counter-text">
                                                Satisfied Clients
                                            </span>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="assets/images/icon3.png" alt="">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-no">
                                                <span class="counter">15</span>K+
                                            </span>
                                            <span class="counter-text">
                                                Satisfied Clients
                                            </span>
                                        </div>
                                    </div>
                                    <div class="counter-item">
                                        <div class="counter-icon">
                                            <img src="assets/images/icon4.png" alt="">
                                        </div>
                                        <div class="counter-content">
                                            <span class="counter-no">
                                                <span class="counter">10</span>K+
                                            </span>
                                            <span class="counter-text">
                                                Satisfied Clients
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="support-area">
                                    <div class="support-icon">
                                        <img src="assets/images/icon5.png" alt="">
                                    </div>
                                    <div class="support-content">
                                        <h4>Our 24/7 Emergency Phone Services</h4>
                                        <h3>
                                            <a href="#">Call: 123-456-7890</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- callback html end -->
            <!-- Home activity section html start -->
            <section class="activity-section">
                <div class="container">
                    <div class="section-heading text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h5 class="dash-style">TRAVEL BY ACTIVITY</h5>
                                <h2>ADVENTURE & ACTIVITY</h2>
                                <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid
                                    blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum
                                    magnis maxime curae placeat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="activity-inner row">
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <a href="#">
                                        <img src="assets/images/icon6.png" alt="">
                                    </a>
                                </div>
                                <div class="activity-content">
                                    <h4>
                                        <a href="#">Adventure</a>
                                    </h4>
                                    <p>15 Destination</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <a href="#">
                                        <img src="assets/images/icon10.png" alt="">
                                    </a>
                                </div>
                                <div class="activity-content">
                                    <h4>
                                        <a href="#">Trekking</a>
                                    </h4>
                                    <p>12 Destination</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <a href="#">
                                        <img src="assets/images/icon9.png" alt="">
                                    </a>
                                </div>
                                <div class="activity-content">
                                    <h4>
                                        <a href="#">Camp Fire</a>
                                    </h4>
                                    <p>7 Destination</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <a href="#">
                                        <img src="assets/images/icon8.png" alt="">
                                    </a>
                                </div>
                                <div class="activity-content">
                                    <h4>
                                        <a href="#">Off Road</a>
                                    </h4>
                                    <p>15 Destination</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <a href="#">
                                        <img src="assets/images/icon7.png" alt="">
                                    </a>
                                </div>
                                <div class="activity-content">
                                    <h4>
                                        <a href="#">Camping</a>
                                    </h4>
                                    <p>13 Destination</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <a href="#">
                                        <img src="assets/images/icon11.png" alt="">
                                    </a>
                                </div>
                                <div class="activity-content">
                                    <h4>
                                        <a href="#">Exploring</a>
                                    </h4>
                                    <p>25 Destination</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- activity html end -->
            <!-- Home special section html start -->
            <section class="special-section">
                <div class="container">
                    <div class="section-heading text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h5 class="dash-style">TRAVEL OFFER & DISCOUNT</h5>
                                <h2>SPECIAL TRAVEL OFFER</h2>
                                <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid
                                    blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum
                                    magnis maxime curae placeat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="special-inner">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="special-item">
                                    <figure class="special-img">
                                        <img src="assets/images/img9.jpg" alt="">
                                    </figure>
                                    <div class="badge-dis">
                                        <span>
                                            <strong>20%</strong>
                                            off
                                        </span>
                                    </div>
                                    <div class="special-content">
                                        <div class="meta-cat">
                                            <a href="#">CANADA</a>
                                        </div>
                                        <h3>
                                            <a href="#">Experience the natural beauty of glacier</a>
                                        </h3>
                                        <div class="package-price">
                                            Price:
                                            <del>$1500</del>
                                            <ins>$1200</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="special-item">
                                    <figure class="special-img">
                                        <img src="assets/images/img10.jpg" alt="">
                                    </figure>
                                    <div class="badge-dis">
                                        <span>
                                            <strong>15%</strong>
                                            off
                                        </span>
                                    </div>
                                    <div class="special-content">
                                        <div class="meta-cat">
                                            <a href="#">NEW ZEALAND</a>
                                        </div>
                                        <h3>
                                            <a href="#">Trekking to the mountain camp site</a>
                                        </h3>
                                        <div class="package-price">
                                            Price:
                                            <del>$1300</del>
                                            <ins>$1105</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="special-item">
                                    <figure class="special-img">
                                        <img src="assets/images/img11.jpg" alt="">
                                    </figure>
                                    <div class="badge-dis">
                                        <span>
                                            <strong>15%</strong>
                                            off
                                        </span>
                                    </div>
                                    <div class="special-content">
                                        <div class="meta-cat">
                                            <a href="#">MALAYSIA</a>
                                        </div>
                                        <h3>
                                            <a href="#">Sunset view of beautiful lakeside city</a>
                                        </h3>
                                        <div class="package-price">
                                            Price:
                                            <del>$1800</del>
                                            <ins>$1476</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- special html end -->
            <!-- Home special section html start -->
            <section class="best-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="section-heading">
                                <h5 class="dash-style">OUR TOUR GALLERY</h5>
                                <h2>BEST TRAVELER'S SHARED PHOTOS</h2>
                                <p>Aperiam sociosqu urna praesent, tristique, corrupti condimentum asperiores platea
                                    ipsum ad arcu. Nostrud. Esse? Aut nostrum, ornare quas provident laoreet nesciunt
                                    odio voluptates etiam, omnis.</p>
                            </div>
                            <figure class="gallery-img">
                                <img src="assets/images/img12.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <figure class="gallery-img">
                                        <img src="assets/images/img13.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-sm-6">
                                    <figure class="gallery-img">
                                        <img src="assets/images/img14.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <figure class="gallery-img">
                                        <img src="assets/images/img15.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- best html end -->
            <!-- Home client section html start -->
            <div class="client-section">
                <div class="container">
                    <div class="client-wrap client-slider secondary-bg">
                        <div class="client-item">
                            <figure>
                                <img src="assets/images/logo1.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/images/logo2.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/images/logo3.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/images/logo4.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/images/logo5.png" alt="">
                            </figure>
                        </div>
                        <div class="client-item">
                            <figure>
                                <img src="assets/images/logo2.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!-- client html end -->
            <!-- Home subscribe section html start -->
            <section class="subscribe-section" style="background-image: url(assets/images/img16.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="section-heading section-heading-white">
                                <h5 class="dash-style">HOLIDAY PACKAGE OFFER</h5>
                                <h2>HOLIDAY SPECIAL 25% OFF !</h2>
                                <h4>Sign up now to recieve hot special offers and information about the best tour
                                    packages, updates and discounts !!</h4>
                                <div class="newsletter-form">
                                    <form>
                                        <input type="email" name="s" placeholder="Your Email Address">
                                        <input type="submit" name="signup" value="SIGN UP NOW!">
                                    </form>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend
                                    temporibus occaecat luctus eleifend tempo ribus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- subscribe html end -->
            <!-- Home blog section html start -->
            <section class="blog-section">
                <div class="container">
                    <div class="section-heading text-center">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <h5 class="dash-style">FROM OUR BLOG</h5>
                                <h2>OUR RECENT POSTS</h2>
                                <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid
                                    blandit, blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum
                                    magnis maxime curae placeat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <article class="post">
                                <figure class="feature-image">
                                    <a href="#">
                                        <img src="assets/images/img17.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="entry-content">
                                    <h3>
                                        <a href="#">Life is a beautiful journey not a destination</a>
                                    </h3>
                                    <div class="entry-meta">
                                        <span class="byline">
                                            <a href="#">Demoteam</a>
                                        </span>
                                        <span class="posted-on">
                                            <a href="#">August 17, 2021</a>
                                        </span>
                                        <span class="comments-link">
                                            <a href="#">No Comments</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <article class="post">
                                <figure class="feature-image">
                                    <a href="#">
                                        <img src="assets/images/img18.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="entry-content">
                                    <h3>
                                        <a href="#">Take only memories, leave only footprints</a>
                                    </h3>
                                    <div class="entry-meta">
                                        <span class="byline">
                                            <a href="#">Demoteam</a>
                                        </span>
                                        <span class="posted-on">
                                            <a href="#">August 17, 2021</a>
                                        </span>
                                        <span class="comments-link">
                                            <a href="#">No Comments</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <article class="post">
                                <figure class="feature-image">
                                    <a href="#">
                                        <img src="assets/images/img19.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="entry-content">
                                    <h3>
                                        <a href="#">Journeys are best measured in new friends</a>
                                    </h3>
                                    <div class="entry-meta">
                                        <span class="byline">
                                            <a href="#">Demoteam</a>
                                        </span>
                                        <span class="posted-on">
                                            <a href="#">August 17, 2021</a>
                                        </span>
                                        <span class="comments-link">
                                            <a href="#">No Comments</a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog html end -->
            <!-- Home testimonial section html start -->
            <div class="testimonial-section" style="background-image: url(assets/images/img23.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="testimonial-inner testimonial-slider">
                                <div class="testimonial-item text-center">
                                    <figure class="testimonial-img">
                                        <img src="assets/images/img20.jpg" alt="">
                                    </figure>
                                    <div class="testimonial-content">
                                        <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis
                                            fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute
                                            facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!?
                                            Corporis condi mentum acpri! "</p>
                                        <cite>
                                            Johny English
                                            <span class="company">Travel Agent</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonial-item text-center">
                                    <figure class="testimonial-img">
                                        <img src="assets/images/img21.jpg" alt="">
                                    </figure>
                                    <div class="testimonial-content">
                                        <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis
                                            fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute
                                            facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!?
                                            Corporis condi mentum acpri! "</p>
                                        <cite>
                                            William Housten
                                            <span class="company">Travel Agent</span>
                                        </cite>
                                    </div>
                                </div>
                                <div class="testimonial-item text-center">
                                    <figure class="testimonial-img">
                                        <img src="assets/images/img22.jpg" alt="">
                                    </figure>
                                    <div class="testimonial-content">
                                        <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis
                                            fusce, atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute
                                            facere? Deserunt aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!?
                                            Corporis condi mentum acpri! "</p>
                                        <cite>
                                            Alison Wright
                                            <span class="company">Travel Guide</span>
                                        </cite>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial html end -->
            <!-- Home contact details section html start -->
            <section class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact-img" style="background-image: url(assets/images/img24.jpg);">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="contact-details-wrap">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="contact-details">
                                            <div class="contact-icon">
                                                <img src="assets/images/icon12.png" alt="">
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">support@gmail.com</a>
                                                </li>
                                                <li>
                                                    <a href="#">info@domain.com</a>
                                                </li>
                                                <li>
                                                    <a href="#">name@company.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="contact-details">
                                            <div class="contact-icon">
                                                <img src="assets/images/icon13.png" alt="">
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#">+132 (599) 254 669</a>
                                                </li>
                                                <li>
                                                    <a href="#">+123 (669) 255 587</a>
                                                </li>
                                                <li>
                                                    <a href="#">+01 (977) 2599 12</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="contact-details">
                                            <div class="contact-icon">
                                                <img src="assets/images/icon14.png" alt="">
                                            </div>
                                            <ul>
                                                <li>
                                                    3146 Koontz, California
                                                </li>
                                                <li>
                                                    Quze.24 Second floor
                                                </li>
                                                <li>
                                                    36 Street, Melbourne
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-btn-wrap">
                                <h3>LET'S JOIN US FOR MORE UPDATE !!</h3>
                                <a href="#" class="button-primary">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--  contact details html end -->
        </main>
        <footer id="colophon" class="site-footer footer-primary">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_text">
                                <h3 class="widget-title">
                                    About Travel
                                </h3>
                                <div class="textwidget widget-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                    ullamcorper mattis, pulvinar dapibus leo.
                                </div>
                                <div class="award-img">
                                    <a href="#"><img src="assets/images/logo6.png" alt=""></a>
                                    <a href="#"><img src="assets/images/logo2.png" alt=""></a>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_text">
                                <h3 class="widget-title">CONTACT INFORMATION</h3>
                                <div class="textwidget widget-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-phone-alt"></i>
                                                +01 (977) 2599 12
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fas fa-envelope"></i>
                                                company@domain.com
                                            </a>
                                        </li>
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                            3146 Koontz, California
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_recent_post">
                                <h3 class="widget-title">Latest Post</h3>
                                <ul>
                                    <li>
                                        <h5>
                                            <a href="#">Life is a beautiful journey not a destination</a>
                                        </h5>
                                        <div class="entry-meta">
                                            <span class="post-on">
                                                <a href="#">August 17, 2021</a>
                                            </span>
                                            <span class="comments-link">
                                                <a href="#">No Comments</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <h5>
                                            <a href="#">Take only memories, leave only footprints</a>
                                        </h5>
                                        <div class="entry-meta">
                                            <span class="post-on">
                                                <a href="#">August 17, 2021</a>
                                            </span>
                                            <span class="comments-link">
                                                <a href="#">No Comments</a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <aside class="widget widget_newslatter">
                                <h3 class="widget-title">SUBSCRIBE US</h3>
                                <div class="widget-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                                <form class="newslatter-form">
                                    <input type="email" name="s" placeholder="Your Email..">
                                    <input type="submit" name="s" value="SUBSCRIBE NOW">
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buttom-footer">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="footer-menu">
                                <ul>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Term & Condition</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="footer-logo">
                                <a href="#"><img src="assets/images/logo.svg" alt="" style="height: 100px"></a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="copy-right text-right">Copyright © 2021 Travele. All rights reserveds</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- header html end -->
    </div>

    <!-- JavaScript -->
    <script src="assets/js/jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
    <script src="assets/js/jquery.counterup.js"></script>
    <script src="assets/vendors/modal-video/jquery-modal-video.min.js"></script>
    <script src="assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/custom.min.js"></script>
</body>

</html>
