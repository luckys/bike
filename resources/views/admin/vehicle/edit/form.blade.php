<div class="panel panel-primary">
    <div class="panel-body">
        {{ Form::open(array('route' => ['vehicles.update',$vehicle->id], 'method' => 'put')) }}

            @include('admin.elements.translation_input_name' ,['item' => $vehicle])

            <fieldset class="form-group">
                <label for="type">Categoría</label>
                <select name="category_id" class="form-control" id="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name['es']}}</option>
                    @endforeach
                </select>
            </fieldset>

            @include('admin.vehicle._prices_input')

            <button type="submit" class="btn btn-primary pull-right">Actualizar</button>
        {{ Form::close() }}
    </div>
</div>