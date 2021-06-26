@extends('frontend.app')

@section('content')

@include('frontend/about-us')
@include('frontend/our-services')
@include('frontend/appointment')
@include('frontend/portfolio')

@instagramFeeds

@include('frontend/promotions')
@include('frontend/video')

@testimonials

@endsection