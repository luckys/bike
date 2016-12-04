<section id="desc" name="desc"></section>
<!-- INTRO WRAP -->
<div id="intro">
    <div class="container">
        <div class="row centered">
            <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/logo.png') }}" alt="">
            <br>
            <br>
            <div class="col-lg-4">
                <a href="{{route('vehicles.list','motorbike')}}"><img class="hidden-xs hidden-sm hidden-md vehicle_pic" src="{{asset('/img/home/motorbike.png')}}"></a>
                <a href="{{route('vehicles.list','motorbike')}}"><h3>@lang('bikes.bikes')</h3></a>
                <a href="{{route('vehicles.list','motorbike')}}"><p>@lang('home.bike_rent')</p></a>
            </div>
            <div class="col-lg-4">
                <a href="{{route('vehicles.list','bike')}}"><img class="hidden-xs hidden-sm hidden-md vehicle_pic" src="{{asset('/img/home/bike.png')}}"></a>
                <a href="{{route('vehicles.list','bike')}}"><h3>@lang('bikes.motorbikes')'</h3></a>
                <a href="{{route('vehicles.list','bike')}}"><p>@lang('home.motorbike_rent')</p></a>
            </div>
            <div class="col-lg-4">
                <a href="{{route('vehicles.list','mobility')}}"><img class="hidden-xs hidden-sm hidden-md vehicle_pic" src="{{ asset('/img/home/bike.png') }}" alt=""></a>
                <a href="{{route('vehicles.list','mobility')}}"><h3>@lang('bikes.mobility')'</h3></a>
                <a href="{{route('vehicles.list','mobility')}}"><p>@lang('home.mobility_rent')</p></a>
            </div>
        </div>
        <br>
    </div> <!--/ .container -->
</div><!--/ #introwrap -->