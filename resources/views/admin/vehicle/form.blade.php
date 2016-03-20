<div class="modal modal-primary" id="modal_create_vehicle">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Crear nuevo vehículo</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array('route' => 'vehicles.create')) }}
                @include('elements.vehicle_type_select')
                @include('elements.translation_input_name')

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary pull-right">Crear</button>
            </div>
            {{ Form::close() }}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

