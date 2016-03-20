<fieldset class="form-group">
    <label for="type">Tipo</label>
    <select name="type" class="form-control" id="type">
        @if(isset($default))
            <option value="">Aplicable a todo</option>
        @endif
        <option value="{{\App\Models\Category::TYPE_MOTORBIKE}}">Moto</option>
        <option value="{{\App\Models\Category::TYPE_BIKE}}">Bicicleta</option>
        <option value="{{\App\Models\Category::TYPE_MOBILITY}}">Vehículo de movilidad reducida</option>
    </select>
</fieldset>