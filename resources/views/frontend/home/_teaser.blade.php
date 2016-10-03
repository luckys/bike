<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-12">
                <div id='vehicle_selector_widget' class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Motorcicles</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Bikecicles</a></li>
                        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">RMV</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="tab_1">
                            @foreach($motos as $moto)
                                {{$moto->name['es']}}
                                <br/>
                            @endforeach
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            @foreach($bikes as $bike)
                                {{$bike->name['es']}}
                                <br/>
                            @endforeach
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane active" id="tab_3">
                            @foreach($mobilities as $mobility)
                                {{$mobility->name['es']}}
                                <br/>
                            @endforeach
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->