<li class="ui-state-default" id="sortable_information_id_{{$item->id}}">
    <div class="row margin-bottom">
        <div class="col-lg-1">
            {{$item->fieldtype}}
        </div>

        {{ Form::open(['method' => 'PUT', 'route' => ['informations.update', $item->id]]) }}
            <div class="col-lg-3">
                <input type="text" name="name[es]" class="form-control" id="name_es" placeholder="ES" value="{{$item->name['es'] or ""}}">
            </div>

            <div class="col-lg-3">
                <input type="text" name="name[en]" class="form-control" id="name_en" placeholder="EN (Vacío toma el valor de ES)" value="{{$item->name['en'] or ""}}">
            </div>

            <div class="col-lg-3">
                <input type="text" name="name[de]" class="form-control" id="name_de" placeholder="DE (Vacío toma el valor de ES)" value="{{$item->name['de'] or ""}}">
            </div>

            <div class="col-lg-1 text-right">
                <span class="glyphicon glyphicon-floppy-save" role="button"></span>
            </div>
        {{ Form::close() }}

        <div class="col-lg-1">
            @include('admin.elements.delete_button',['route' => ['informations.delete', $item->id]])
        </div>
    </div>
</li>