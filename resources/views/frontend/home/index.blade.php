@extends('frontend.layout.main')

@section('content')
    <div id="home">
        @include('frontend.home._teaser')
        @include('frontend.home._intro')
        @include('frontend.home._features')
        @include('frontend.home._screenshots')
    </div>
@endsection
