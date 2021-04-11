@extends('frontend.app')

@section('content')

<section class="blog">
    <div class="blogpost">
        <div class="container">
            <div class="row">

                <div class="col-lg-12" *ngFor="let blog of blogs">
                    <div class="blogfull wow fadeInUp">
                        <div class="blogimg"><img src="{{ url('storage/' .  $blog->image_path) }}"
                                class="img-responsive">
                        </div>
                        <div class="blogfullcontent">
                            <div class="blogtitle">
                                <h2>{{ $blog->title }}</h2>
                                <!-- <span>July 31, 2014 | Author: Harry Panchal | No Comments</span> -->
                            </div>
                            <p>{{ $blog->description }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection