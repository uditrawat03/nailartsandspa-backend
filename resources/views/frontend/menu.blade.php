@if(request()->route()->getName() == 'home')
<header id="pagetop">
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo page-scroll"><a href="#pagetop"><img
                                src="{{ asset('assets/images/nailandarts/logo.png') }}" alt="logo" width="120"></a>
                    </div>
                    <div class="mm-toggle-wrap">
                        <div class="mm-toggle"> <i class="icon-menu"><img
                                    src="{{ asset('assets/images/menu-icon.png') }}" alt="Menu"></i></div>
                    </div>
                    <ul class="menu">
                        <li class="page-scroll"><a href="#salon">Nail Art & Spa</a></li>
                        <li class="page-scroll"><a href="#ourteam">Our Nail Technician</a></li>
                        <li class="page-scroll"><a href="#services">Our Services</a></li>
                        <li class="page-scroll"><a href="#appointment">Appointment</a></li>
                        <!-- <li class="page-scroll"><a routerLink='/' href="#gallery">portfolio</a></li> -->
                        <li class="page-scroll"><a href="#promotions">Early bird special</a></li>
                        <li class=""><a href="{{ route('blogs.index') }}" target="_blank">Blogs</a></li>
                        <li class="page-scroll"><a href="#video" >About Us</a></li>
                        <!-- <li><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
                                <li><a href="blog-masonary.html">Blog Masonary</a></li>
                            </ul>
                        </li> -->
                        <li class="page-scroll"><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </nav>
</header>

@else

<header id="pagetop">
    <nav>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo page-scroll"><a href="{{ route('home') }}#pagetop"><img
                                src="{{ asset('assets/images/nailandarts/logo.png') }}" alt="logo" width="120"></a>
                    </div>
                    <div class="mm-toggle-wrap">
                        <div class="mm-toggle"> <i class="icon-menu"><img
                                    src="{{ asset('assets/images/menu-icon.png') }}" alt="Menu"></i></div>
                    </div>
                    <ul class="menu">
                        <li class="page-scroll"><a href="{{ route('home') }}#salon">Nail Art & Spa</a></li>
                        <li class="page-scroll"><a href="{{ route('home') }}#ourteam">Our Nail Technician</a></li>
                        <li class="page-scroll"><a href="{{ route('home') }}#services">Our Services</a></li>
                        <li class="page-scroll"><a href="{{ route('home') }}#appointment">Appointment</a></li>
                        <!-- <li class="page-scroll"><a routerLink='/' href="#gallery">portfolio</a></li> -->
                        <li class="page-scroll"><a href="{{ route('home') }}#promotions">Early bird special</a></li>
                        <li class=""><a href="{{ route('blogs.index') }}">Blogs</a></li>
                        <li class="page-scroll"><a href="#video">About Us</a></li>
                        <!-- <li><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
                                <li><a href="blog-masonary.html">Blog Masonary</a></li>
                            </ul>
                        </li> -->
                        <li class="page-scroll"><a href="{{ route('home') }}#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </nav>
</header>

@endif