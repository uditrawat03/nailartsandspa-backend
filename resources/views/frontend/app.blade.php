<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>NailandArtSpa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/master.css">
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
    </div>


</body>

<script src="assets/js/jquery.1.11.2.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/function.js"></script>
<script src="assets/js/bootstrap-datepicker.js"></script>
<script src="assets/js/parallax.js"></script>
<script src="assets/js/scorll.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/menu.js"></script>
<script src="assets/js/ios-timer.js"></script>
<script src="assets/js/jquery.fencybox.js"></script>
<script src="assets/js/jquery.portfolio.js"></script>
<script src="assets/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.validate.js"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="assets/js/revoluation/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/js/revoluation/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="assets/js/revoluation/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="assets/js/revoluation/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/js/revoluation/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/js/revoluation/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/js/revoluation/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/js/revoluation/revoluationfunction.js"></script>

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