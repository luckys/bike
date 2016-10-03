@extends('frontend.layout.main')

@section('content')
    @include('frontend.home._navbar')
    @include('frontend.home._teaser')
    @include('frontend.home._intro')
    @include('frontend.home._features')
    @include('frontend.home._screenshots')
    @include('frontend.home._contact')
    @include('frontend.home._footer')
@endsection