<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/{{Lang::locale()}}"><img src="{{ asset('/img/logo.png') }}"  alt=""></a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li @if(route('home') == url()->current()) class="active" @endif>
                    <a href="/" class="smothscroll">{{ucfirst(trans('bike.home'))}}</a>
                </li>
                <li @if(route('vehicles.list', 'motorbike') == url()->current()) class="active" @endif>
                    <a href="{{route('vehicles.list', 'motorbike')}}" >{{ucfirst(trans('bike.motorbike'))}}</a>
                </li>
                <li @if(route('vehicles.list', 'bike') == url()->current()) class="active" @endif>
                    <a href="{{route('vehicles.list', 'bike')}}" >{{ucfirst(trans('bike.bike'))}}</a>
                </li>
                <li @if(route('vehicles.list', 'mobility') == url()->current()) class="active" @endif>
                    <a href="{{route('vehicles.list', 'mobility')}}">{{ucfirst(trans('bike.mobility'))}}</a>
                </li>
                <li><a href="#contact" class="smothScroll">{{ucfirst(trans('bike.contact'))}}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Lang::locale()}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{str_replace( "/".Lang::locale(), "/en", url()->current()) }}">English</a></li>
                        <li><a href="{{str_replace( "/".Lang::locale(), "/es", url()->current()) }}">Español</a></li>
                        <li><a href="{{str_replace( "/".Lang::locale(), "/de", url()->current()) }}">Deutsch</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>