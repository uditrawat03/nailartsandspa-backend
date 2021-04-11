@extends('frontend.app')

@section('content')

<section class="blog">
    <div class="blogpost">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-12" *ngFor="let blog of blogs">
                    <div class="blogfull wow fadeInUp">
                        <div class="blogimg"><img src="{{ $blog->image_path }}" class="img-responsive"></div>
                        <div class="blogfullcontent">
                            <div class="blogtitle">
                                <h2>{{ $blog->title }}</h2>
                                <!-- <span>July 31, 2014 | Author: Harry Panchal | No Comments</span> -->
                            </div>
                            <p>{{ $blog->body }}</p>
                            <a class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection