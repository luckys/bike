<fieldset class="form-group">
    <label for="name_es">Nombre *</label>
    <input type="text" name="name[es]" class="form-control" id="name_es" placeholder="ES" value="{{$item->name['es'] or ""}}">
</fieldset>
<fieldset class="form-group">
    <label for="name_en">Name</label>
    <input type="text" name="name[en]" class="form-control" id="name_en" placeholder="EN (Vacío toma el valor de ES)" value="{{$item->name['en'] or ""}}">
</fieldset>
<fieldset class="form-group">
    <label for="name_de">Name</label>
    <input type="text" name="name[de]" class="form-control" id="name_de" placeholder="DE (Vacío toma el valor de ES)" value="{{$item->name['de'] or ""}}">
</fieldset>