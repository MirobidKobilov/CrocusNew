<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="/assets/images/logo.svg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
    <!-- Fonts Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/fontawesome/css/all.min.css">
    <!-- jquery-ui css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/jquery-ui/jquery-ui.min.css">
    <!-- modal video css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/modal-video/modal-video.min.css">
    <!-- light box css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/lightbox/dist/css/lightbox.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/slick/slick-theme.css">
    <!-- google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="stylesheet" href="/custom.css">
    <title>Crocus Tour Booking</title>
</head>

<body>
    <div id="siteLoader" class="site-loader">
        <div class="preloader-content">
            <img src="/assets/images/loader1.gif" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        @include('layouts.header')
        <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url(/assets/images/inner-banner.jpg);">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h1 class="inner-title">Bron qilish</h1>
                        </div>
                    </div>
                </div>
                <div class="inner-shape"></div>
            </section>
            <!-- Inner Banner html end-->
            <div class="step-section booking-section">
                <div class="container">
                    <div class="step-link-wrap d-none">
                        <div class="step-item active">
                            Your cart
                            <a href="#" class="step-icon"></a>
                        </div>
                        <div class="step-item active">
                            Your Details
                            <a href="#" class="step-icon"></a>
                        </div>
                        <div class="step-item">
                            Finish
                            <a href="#" class="step-icon"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 right-sidebar">
                            <!-- step one form html start -->
                            <div class="booking-form-wrap">
                                <div class="booking-content mb-4">
                                    <div class="form-title mb-0">
                                        <h3>Ma'lumotlar</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <div class="text-center mb-2">
                                                Medhufushi Island Resort
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-center">
                                                <i class="fas fa-star" style="color: gold"></i>
                                                <i class="fas fa-star" style="color: gold"></i>
                                                <i class="fas fa-star" style="color: gold"></i>
                                                <i class="fas fa-star" style="color: gold"></i>
                                                <i class="fas fa-star" style="color: gold"></i>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label>To'liq ism*</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Telefon*</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email*</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-0">
                                                <label for="message">Habar</label>
                                                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-policy">
                                    <h3>Cancellation policy</h3>
                                    <div class="form-group">
                                        <label class="checkbox-list">
                                            <input type="checkbox" name="s">
                                            <span class="custom-checkbox"></span>
                                            I accept terms and conditions and general policy.
                                        </label>
                                    </div>
                                    <a href="https://payme.uz" target="_blank" class="button-primary">
                                        To'lov qilish
                                    </a>
                                </div>
                            </div>
                            <!-- step one form html end -->
                        </div>
                        <div class="col-lg-4">
                            <aside class="sidebar">
                                <div class="widget-bg widget-table-summary">
                                    <h4 class="bg-title">Narxlar</h4>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>Tour narxi </strong>
                                                </td>
                                                <td class="text-right">
                                                    $300
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Gid</strong>
                                                </td>
                                                <td class="text-right">
                                                    $34
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Sug'urta</strong>
                                                </td>
                                                <td class="text-right">
                                                    $34
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Soliq</strong>
                                                </td>
                                                <td class="text-right">
                                                    13%
                                                </td>
                                            </tr>
                                            <tr class="total">
                                                <td>
                                                    <strong>Umumiy narx</strong>
                                                </td>
                                                <td class="text-right">
                                                    <strong>$368</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="widget-bg widget-support-wrap">
                                    <div class="icon">
                                        <i class="fas fa-phone-volume"></i>
                                    </div>
                                    <div class="support-content">
                                        <h5>Qo'ng'iroq markazimiz</h5>
                                        <a href="telto:12345678" class="phone">+998 88 851 18 04</a>
                                        <small>Dushanbadan Jumagacha 9:00 - 18:00</small>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('layouts.footer')
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
    <script src="/assets/js/jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
    <script src="/assets/js/jquery.counterup.js"></script>
    <script src="/assets/vendors/modal-video/jquery-modal-video.min.js"></script>
    <script src="/assets/vendors/masonry/masonry.pkgd.min.js"></script>
    <script src="/assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
    <script src="/assets/vendors/slick/slick.min.js"></script>
    <script src="/assets/js/jquery.slicknav.js"></script>
    <script src="/assets/js/custom.min.js"></script>
</body>

</html>
