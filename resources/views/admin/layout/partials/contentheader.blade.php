<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="row">
        <div class="col-md-3">
            <h1>
                @yield('contentheader_title', 'Page Header here')
                <small>@yield('contentheader_description')</small>
            </h1>
        </div>
        <div class="col-md-3 pull-right">
            @yield('contentheader_actions', '')
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</section>