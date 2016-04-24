{{ Form::open(['method' => 'PUT', 'route' => ['categories.update', $item->id]]) }}
<div class="col-lg-3">
    <input type="text" name="name[es]" class="form-control" id="name_es" placeholder="ES" value="{{$item->name['es'] or ""}}">
</div>

<div class="col-lg-3">
    <input type="text" name="name[en]" class="form-control" id="name_en" placeholder="EN (Vacío toma el valor de ES)" value="{{$item->name['en'] or ""}}">
</div>

<div class="col-lg-3">
    <input type="text" name="name[de]" class="form-control" id="name_de" placeholder="DE (Vacío toma el valor de ES)" value="{{$item->name['de'] or ""}}">
</div>

<div class="col-lg-2 text-right">
    <span class="glyphicon glyphicon-floppy-save" role="button"></span>
</div>
{{ Form::close() }}

<div class="col-lg-1">
    @include('elements.delete_button',['route' => ['categories.delete', $item->id]])
</div>


