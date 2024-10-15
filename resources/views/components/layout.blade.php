<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Công ty xây dựng Nghĩa Gia Phát</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="logo/logo-medium.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <header>
        <x-header></x-header>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <x-footer></x-footer>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <script src="/assets/js/jquery.slicknav.min.js"></script>

    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>

    <script src="/assets/js/gijgo.min.js"></script>

    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/animated.headline.js"></script>
    <script src="/assets/js/jquery.magnific-popup.js"></script>

    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <script src="/assets/js/jquery.sticky.js"></script>

    <script src="/assets/js/vendor/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>

    <script src="/assets/js/contact.js"></script>
    <script src="/assets/js/jquery.form.js"></script>
    <script src="/assets/js/jquery.validate.min.js"></script>
    <script src="/assets/js/mail-script.js"></script>
    <script src="/assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>
    @stack('scripts')
</body>

</html>
