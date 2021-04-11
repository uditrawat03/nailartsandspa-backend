@if(request()->route()->getName() == 'home')
<div id="mobile-menu">
    <ul>
        <li class="page-scroll"><a href="#salon">Nail Art & Spa</a></li>
        <li class="page-scroll"><a href="#ourteam">Our Nail Technician</a></li>
        <li class="page-scroll"><a href="#services">Our Services</a></li>
        <li class="page-scroll"><a href="#gallery">portfolio</a></li>
        <li class="page-scroll"><a href="#promotions">Early bird special</a></li>
        <li class=""><a href="{{ route('blogs.index') }}">Blogs</a></li>
        <li class="page-scroll"><a href="#video">About Us</a></li>

        <!-- <li><a href="blog.html">Blog</a></li>
        <li><a href="blog-classic.html">Blog Classic</a></li>
        <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
        <li><a href="blog-masonary.html">Blog Masonary</a></li> -->
        <li class="page-scroll"><a href="#contact">Contact</a></li>
    </ul>
</div>
@else
<div id="mobile-menu">
    <ul>
        <li class="page-scroll"><a href="{{ route('home') }}#salon">Nail Art & Spa</a></li>
        <li class="page-scroll"><a href="{{ route('home') }}#ourteam">Our Nail Technician</a></li>
        <li class="page-scroll"><a href="{{ route('home') }}#services">Our Services</a></li>
        <li class="page-scroll"><a href="{{ route('home') }}#gallery">portfolio</a></li>
        <li class="page-scroll"><a href="{{ route('home') }}#promotions">Early bird special</a></li>
        <li class=""><a href="{{ route('blogs.index') }}">Blogs</a></li>
        <li class="page-scroll"><a href="{{ route('home') }}#video">About Us</a></li>

        <!-- <li><a href="blog-classic.html">Blog Classic</a></li>
        <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
        <li><a href="blog-masonary.html">Blog Masonary</a></li> -->
        <li class="page-scroll"><a href="{{ route('home') }}#contact">Contact</a></li>
    </ul>
</div>

@endif