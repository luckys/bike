<div class="modal modal-primary" id="modal_add_information_to_vehicle">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Añadir característica</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array('route' => ['vehicles.addinformation',$vehicle->id])) }}

                <input  name="information_id" type="hidden" value="">
                <input  name="fieldtype" type="hidden" value="">

                <div id="information_input_field">
                    @include('elements.translation_input_name')
                </div>

                <div id="information_checkbox_field">
                    <label class="col-md-6" id="information_checkbox_text"></label>
                    <input class="col-md-6" type="checkbox" name="checkbox_value" value="1"
                           data-on-text="Sí" data-off-text="No">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary pull-right">Crear</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

