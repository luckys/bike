<!DOCTYPE html>

<html lang="es">

@section('htmlheader')
    @include('admin.layout.partials.htmlheader')
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.layout.partials.mainheader')
    @include('admin.layout.partials.sidebar')
    <div class="content-wrapper">
        @include('admin.layout.partials.contentheader')
        <section class="content">
            @yield('main-content')
        </section>
    </div>
    @include('admin.layout.partials.controlsidebar')
    @include('admin.layout.partials.footer')
</div>

@section('scripts')
    @include('admin.layout.partials.scripts')
@show

</body>
</html>
