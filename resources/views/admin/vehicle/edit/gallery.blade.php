<div class="panel panel-primary">
    <div class="panel-heading">Galería de imágenes</div>
    <div class="panel-body">
        <div class="gallery">
            <a class='btn btn-primary' href='javascript:;'>
                Añadir imagen:
                <input type="file" name="file" size="40" onchange='vehicle.openCropper(this);'>
            </a>
            @foreach($images as $image)
                <div class="col-lg-10">
                    <img src="{{$image->url}}" width="100px" height="100px">
                </div>
                <div class="col-lg-2">
                    @include('admin.elements.delete_button', ['route' => ['attachments.delete', $image->id]])
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('admin.vehicle.edit.crop')


