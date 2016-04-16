<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Características disponibles</h3>
    </div>
    <div class="box-body">
        <div class="js_add_information btn-group-vertical" role="group" >
            @foreach($informations as $information)
                <button type="button" class="btn btn-default" data-id="{{$information->id}}"
                        data-fieldtype="{{$information->fieldtype}}" data-name="{{json_encode($information->name)}}">
                    {{$information->name['es']}}
                </button>
            @endforeach
        </div>
    </div>
</div>