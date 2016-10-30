<section id="home" name="home"></section>
<div id="headerwrap">
    <div class="container">
        <div class="row centered">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div id='vehicle_selector_widget' class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Motorcicles</a></li>
                        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Bikecicles</a></li>
                        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">RMV</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="tab_1">
                            @include('frontend.home._vehicle_list', ['type' => 'motorbike'])
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            @include('frontend.home._vehicle_list', ['type' => 'bike'])
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane active" id="tab_3">
                            @include('frontend.home._vehicle_list', ['type' => 'mobility'])
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div> <!--/ .container -->
</div><!--/ #headerwrap -->