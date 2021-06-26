<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>NailandArtSpa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/master.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

    <style>
        /*booksy css*/
        .booksy_book_click.event_hover {
            background: url(https://booksy.com/widget/images/book-en-green.png) no-repeat center center;
            cursor: pointer;
            display: inline-block;
            margin: 0 auto;
            padding: 0;
            width: 182px;
            height: 63px;
            background-size: cover !important;
            transition: all 0.5s ease 0s;
            border-radius: 8px;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
        }

        .booksy_book_click.event_hover:hover {
            width: 200px;
            height: 70px;
            transition: all 0.5s ease 0s
        }

        .booksy-widget-container {
            display: none !important;
        }
        .row .g-grid {
            position: relative;
            z-index: 1000;
            display:block!important;
        }
        .social-side .g-social a {
            width: 100%;
            padding: 0;
            background-color: #121212;
            border: 1px solid #121212;
            color: #fff;
            border-radius: 0;
            display: flex;
            height: 50px;
            align-content: center;
            align-items: center;
        }
        .g-social a {
            overflow: hidden;
            white-space: nowrap;
            transition: 0.5s;
            margin-right: calc(-300px + 3.5rem);
            width: 300px !important;
            border-radius: 0;
        }
        .g-social a {
            display: block;
            padding: 1rem 1rem 1rem 0;
            text-align: left;
            margin: 0;
            color: #fff !important;
        }
        .g-social a {
            width: 32%;
            margin: 0;
            font-size: 1.25rem;
        }
        .g-social a {
            color: #4d217f;
            font-size: 1.5rem;
            border-radius: 2px;
        }
        .g-social {
            line-height: normal;
        }
        :focus {
            outline: -webkit-focus-ring-color auto 1px;
        }
        .social-side .g-content {
            padding: 0;
            margin: 0;
        }
        .g-social a:hover {
            margin-right: 0;
            margin-left: calc(-280px + 3.5rem);
        }
        .g-content {
            margin: 0.625rem;
            padding: 1.5rem;
        }
        .g-content {
            margin: 0.625rem;
            padding: 1.5rem;
        }
        .social-side {
            position: fixed;
            top: 30%;
            right: -246px;
            z-index: 1000;
            width: auto;
        }
        .size-100 {
            /*width: 100%;*/
            max-width: 100%;
            -webkit-flex-grow: 0;
            -moz-flex-grow: 0;
            flex-grow: 0;
            -ms-flex-positive: 0;
            -webkit-flex-basis: 100%;
            -moz-flex-basis: 100%;
            flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
        }
        .g-block {
            -webkit-box-flex: 1;
            -moz-box-flex: 1;
            box-flex: 1;
            -webkit-flex: 1;
            -moz-flex: 1;
            -ms-flex: 1;
            flex: 1;
            min-width: 0;
            min-height: 0;
        }        
        .fa-facebook-square:before {
            content: "\f082";
        }
        .fa-instagram:before {
            content: "\f16d";
        }
        .fa-dot-circle-o:before {
            content: "\f192";
        }
        .fa-calendar:before {
            content: "\f073";
        }
        .fa-phone-square:before {
            content: "\f098";
        }
        .social-side .g-social a span {
            display: table-cell;
            padding: 0 1rem;
            width: 50px;
            padding: 0 0.5rem;
            text-align: center;
        }

    </style>
</head>

<body>
    <div id="overlay"></div>
    @include('frontend/mobile-menu')
    <div id="page">

        @include('frontend/menu')

        @include('frontend/slider')

        @yield('content')

        @include('frontend/contactus')
        <a href="#" class="scrollup">Top</a>
        <div class="g-grid">
            <div class="g-block size-100 social-side">
                <div id="social-1532-particle" class="g-content g-particle">            
                    <div class="g-social ">
                        <a target="_blank" href="https://www.facebook.com/nailartspaStPete/" title="Like us on Facebook" aria-label="Like us on Facebook">
                            <span class="fa fa-facebook-square fa-fw"></span>
                            <span class="g-social-text">Like us on Facebook</span>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/nailartspa/" title="Instagram" aria-label="Instagram">
                            <span class="fa fa-instagram"></span>
                            <span class="g-social-text">Instagram</span>
                        </a>
                        <a target="_blank" href="https://www.yelp.com/biz/nail-art-and-spa-st-petersburg" title="TikTok" aria-label="TikTok">
                            <span class="fa fa-yelp"></span>            
                            <span class="g-social-text">Yelp</span>            
                        </a>
                        <a href="javascript:void(0)" title="Request an Appointment" aria-label="Request an Appointment" class="booksy_book_click">
                            <span class="fa fa-calendar fa-fw"></span>
                            <span class="g-social-text">Request an Appointment</span>
                        </a>
                        <a target="_blank" href="https://www.google.com/maps/place/Nail+Art+%26+Spa/@27.7915,-82.674493,14z/data=!4m5!3m4!1s0x0:0xa03f44d4f6f85547!8m2!3d27.7915733!4d-82.6744644?hl=en-US" title="Google Map" aria-label="Google Map">
                            <span class="fa fa-map-marker fa-fw"></span>
                            <span class="g-social-text">Google Map</span>
                        </a>                   
                        <a target="_blank" href="tel:727-999-1581" title="Call Us" aria-label="Call Us">
                            <span class="fa fa-phone-square fa-fw"></span>
                            <span class="g-social-text">Call Us</span>        
                        </a>
                    </div>
                </div>
            </div>
        </div>       
    </div>


</body>

<script src="{{ asset('assets/js/jquery.1.11.2.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/function.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/js/parallax.js') }}"></script>
<script src="{{ asset('assets/js/scorll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/menu.js') }}"></script>
<script src="{{ asset('assets/js/ios-timer.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fencybox.js') }}"></script>
<script src="{{ asset('assets/js/jquery.portfolio.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mousewheel-3.0.6.pack.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{ asset('assets/js/revoluation/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/revoluation/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('assets/js/revoluation/revolution.extension.layeranimation.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('assets/js/revoluation/revolution.extension.migration.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('assets/js/revoluation/revolution.extension.navigation.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('assets/js/revoluation/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/revoluation/revolution.extension.slideanims.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('assets/js/revoluation/revoluationfunction.js') }}"></script>

<script type="text/javascript" src="https://booksy.com/widget/code.js?id=102956&country=us&lang=en"></script>

<script type="text/javascript">
    $(document).ready(function() {
        /* booksy book click */
        $('.booksy_book_click').click(function(e) {
            $('.booksy-widget-button').trigger('click');
        }); /* End booksy book click */
    });
</script>

</html>