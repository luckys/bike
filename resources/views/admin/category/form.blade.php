{{ Form::open(array('route' => 'categories.create')) }}
    <fieldset class="form-group">
        <label for="tipo">Tipo</label>
        <select name="type" class="form-control" id="tipo">
            <option value="{{\App\Models\Category::TYPE_MOTORBIKE}}">Moto</option>
            <option value="{{\App\Models\Category::TYPE_BIKE}}">Bicicleta</option>
            <option value="{{\App\Models\Category::TYPE_MOBILITY}}">Vehículo de movilidad reducida</option>
        </select>
    </fieldset>
    <fieldset class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
    </fieldset>
    <button type="submit" class="btn btn-primary">Crear</button>
{{ Form::close() }}

