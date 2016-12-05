<div class="modal modal-primary" id="modal_create_information">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Crear nueva característica</h4>
            </div>
            <div class="modal-body">
                {{ Form::open(array('route' => 'informations.create')) }}

                @include('admin.elements.vehicle_type_select',['default' => true])

                <fieldset class="form-group">
                    <label for="fieldtype">Formato</label>
                    <select name="fieldtype" class="form-control" id="fieldtype">
                        <option value="{{\App\Models\Information::FIELDTYPE_CHECKBOX}}">Checkbox</option>
                        <option value="{{\App\Models\Information::FIELDTYPE_INPUT}}">Input</option>
                    </select>
                </fieldset>

                @include('admin.elements.translation_input_name')

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

