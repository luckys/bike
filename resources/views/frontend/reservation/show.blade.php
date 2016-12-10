@extends('frontend.layout.main')

@section('content')
    <div id="reservation" class="container margin-top">
        <div class="row centered">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="box box-info">
                    <div class="box-header with-border">

                    </div>
                    <div class="box-body">
                        @include('frontend.reservation.show.main_info')
                        @include('frontend.reservation.show.extra_info')
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
@endsection