<section id="gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Instagram Feeds</h2>
            </div>
            <div class="clearfix"></div>
            <div id="instafeed"></div>
            <div class="portfoliodiv">
                @if(isset($data))
                @foreach($data as $feed)
                <div class="col-25 coloring manucuring">

                    <a class="fancybox" href="{{ $feed }}" data-fancybox-group="gallery">
                        <div class="hover">
                            <img src="{{ $feed }}" alt="Portfolio" />
                            <div class="mask-img">
                                <div class="hvrlink">
                                    <!-- <h3>Feeds</h3> -->
                                    <!-- <p>Lorem Ipsum is simply dummy text of the printing industry.</p> -->
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>