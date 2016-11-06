<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/" class="smothscroll">Home</a></li>
                <li><a href="{{route('vehicles.list', 'motorbike')}}" class="smothScroll">{{trans('motorbike')}}</a></li>
                <li><a href="{{route('vehicles.list', 'bike')}}" class="smothScroll">{{trans('bike')}}</a></li>
                <li><a href="{{route('vehicles.list', 'mobility')}}" class="smothScroll">{{trans('mobility')}}</a></li>
                <li><a href="#contact" class="smothScroll">Contact</a></li>
            </ul>
            {{--<ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a href="/home">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>--}}
        </div><!--/.nav-collapse -->
    </div>
</div>