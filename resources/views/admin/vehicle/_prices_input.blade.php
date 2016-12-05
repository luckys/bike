<fieldset class="form-group">
    <label for="prices_1">Precio 1</label>
    <input type="number" name="prices[1]" class="form-control" id="prices_1" placeholder="Barato" value="{{$vehicle->prices[1] or ""}}">
</fieldset>

<fieldset class="form-group">
    <label for="prices_2">Precio 2</label>
    <input type="number" name="prices[2]" class="form-control" id="prices_2" placeholder="Medio" value="{{$vehicle->prices[2] or ""}}">
</fieldset>

<fieldset class="form-group">
    <label for="prices_3">Precio 3</label>
    <input type="number" name="prices[3]" class="form-control" id="prices_2" placeholder="Caro" value="{{$vehicle->prices[3] or ""}}">
</fieldset>