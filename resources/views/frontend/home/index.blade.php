@extends('frontend.layout.main')
@section('content')
        <!-- Page Content -->
<div class="container">
    <hr>
    @include('frontend.home._business_information')
            <!-- /.row -->
    <hr>
        @include('frontend.home._offers')
    <hr>
    </div>
@endsection