<!doctype html>
<html class="no-js" lang="zxx">


<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Nolff</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="{{asset('nolff/images/logo_s.png')}}">


<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" href="{{asset('css/slick.css')}}">
<link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>


@include('layouts.navigation')


@yield('content')


<footer class="footer mt-5">
    <div class="query_area">
        <div class="container">
            <div class="bottom_border">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="query_text">
                        <h3>Have any project or query? <br>
                        Just say hello <a href="mailnto:ekabachrudin@gmail.com">Mail Us</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="query_number">
                        <h3>(021) 572 0358</h3>
                        <p><a href="mailnto:ekabachrudin@gmail.com"><span>nolff@interior.com</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                        Address
                        </h3>
                        <ul>
                            <li><p>Jakarta Design Center Building 2nd Fl. SR. 14
                                Jl. Gatot Subroto Kav. 53 Slipi
                                Jakarta Barat 10260</p></li>                         
                            <li><a href="#"> (021) 572 0358</a></li>
                            <li><a href="#"><span>nolff@interior.com</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Product
                        </h3>
                        <ul>
                            <li><a href="{{route('product.office')}}">Office</a></li>
                            <li><a href="{{route('product.bedroom')}}">Bed Room</a></li>
                            <li><a href="{{route('product.livingroom')}}">Living Room</a></li>
                            <li><a href="{{route('product.walkincloset')}}">Walk In Closet</a></li>
                            <li><a href="{{route('product.wardrobe')}}">Wardrobe</a></li>
                            <li><a href="{{route('product.kitchen')}}">Kitchen Set</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Company
                        </h3>
                        <ul>
                            <li><a href="{{route('company.history')}}">HISTORY</a></li>
                            <li><a href="{{route('company.manufacture')}}">MANUFACTURE</a></li>
                            <li><a href="{{route('company.v&m')}}">VISION & MISSION</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 ">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                        Subscribe
                        </h3>
                        <form action="#" class="newsletter_form">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit">Subscribe</button>
                        </form>
                        <p class="newsletter_text text-danger">Ini Adalah Contoh Website By Eka Bachrudi Nursa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">

                        Copyright &copy;<script data-cfasync="false" src="{{asset('')}}cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Eka Bachrudin Nursa</a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('jquery/3.2.1/jquery.min.js')}}"></script>
<script src="{{asset('common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.html')}}"></script>
<script src="{{asset('jqueryui/1.12.1/jquery-ui.min.js')}}"> </script>

<script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>

<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/ajax-form.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/scrollIt.js')}}"></script>
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/nice-select.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>

<script src="{{asset('js/slick.min.js')}}"></script>

<script src="{{asset('js/contact.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/jquery.form.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/mail-script.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
        function collision($div1, $div2) {
            var x1 = $div1.offset().left;
            var w1 = 40;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var w2 = 40;
            var r2 = x2 + w2;

            if (r1 < x2 || x1 > r2)
                return false;
            return true;
        }
        // Fetch Url value 
        var getQueryString = function (parameter) {
            var href = window.location.href;
            var reg = new RegExp('[?&]' + parameter + '=([^&#]*)', 'i');
            var string = reg.exec(href);
            return string ? string[1] : null;
        };
        // End url 
        // // slider call
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel();
        });

        $('#slider').slider({
            range: true,
            min: 20,
            max: 200,
            step: 1,
            values: [getQueryString('minval') ? getQueryString('minval') : 20, getQueryString('maxval') ?
                getQueryString('maxval') :200
            ],

            slide: function (event, ui) {

                $('.ui-slider-handle:eq(0) .price-range-min').html( ui.values[0] + 'K');
                $('.ui-slider-handle:eq(1) .price-range-max').html( ui.values[1] + 'K');
                $('.price-range-both').html('<i>K' + ui.values[0] + ' - </i>K' + ui.values[1]);

                // get values of min and max
                $("#minval").val(ui.values[0]);
                $("#maxval").val(ui.values[1]);

                if (ui.values[0] == ui.values[1]) {
                    $('.price-range-both i').css('display', 'none');
                } else {
                    $('.price-range-both i').css('display', 'inline');
                }

                if (collision($('.price-range-min'), $('.price-range-max')) == true) {
                    $('.price-range-min, .price-range-max').css('opacity', '0');
                    $('.price-range-both').css('display', 'block');
                } else {
                    $('.price-range-min, .price-range-max').css('opacity', '1');
                    $('.price-range-both').css('display', 'none');
                }

            }
        });

        $('.ui-slider-range').append('<span class="price-range-both value"><i>' + $('#slider').slider('values', 0) +
            ' - </i>' + $('#slider').slider('values', 1) + '</span>');

        $('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">' + $('#slider').slider('values', 0) +
            'k</span>');

        $('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">' + $('#slider').slider('values', 1) +
            'k</span>');
    </script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="{{asset('js/beacon.min.js')}}" data-cf-beacon='{"si":10,"rayId":"6140d77d18f1d95a","version":"2021.1.1"}'></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/interior2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jan 2021 13:20:15 GMT -->
</html>