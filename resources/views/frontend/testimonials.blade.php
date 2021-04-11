<section class="testimonialdiv wow fadeInUp">

    @if(isset($testimonials) && $testimonials)
    <div class="container">
        <div class="testimonilabg">
            <h2>Testimonials</h2>

            <div id="myCarousel-2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner" role="listbox">

                    @foreach($testimonials as $testimonial)

                    @if ($loop->first)

                    <div class="item active">
                        <div class="img-left"><img
                                src="{{ $testimonial->image ? $testimonial->image : asset('assets/images/user-icon.jpg') }}"
                                alt="{{ $testimonial->name }}" class="img-responsive">
                        </div>
                        <div class="col-pad4 tbg-white">
                            <h4>{{ $testimonial->name }}</h4>

                            <p>{{ $testimonial->feedback }}</p>
                        </div>
                    </div>
                    @else
                    <div class="item">
                        <div class="img-left"><img
                                src="{{ $testimonial->image ? $testimonial->image : asset('assets/images/user-icon.jpg') }}"
                                alt="{{ $testimonial->name }}" class="img-responsive">
                        </div>
                        <div class="col-pad4 tbg-white">
                            <h4>{{ $testimonial->name }}</h4>

                            <p>{{ $testimonial->feedback }}</p>
                        </div>
                    </div>
                    @endif

                    @endforeach

                </div>
                <div class="carousel-control"> <a class="left" href="#myCarousel-2" role="button" data-slide="prev"></a>
                    <a class="right" href="#myCarousel-2" role="button" data-slide="next"></a>
                </div>
            </div>

        </div>
    </div>
    @endif
</section>