<div class="modal modal-primary" id="modal_crop_image">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Normalizar imagen</h4>
            </div>
            <div class="modal-body">
                <div class="crop_wrapper">
                    <img id="imagetocrop" src="{{asset('img/loading.gif')}}" alt=""
                         data-url="{{route('attachments.create',$vehicle->id)}}" data-id="{{$vehicle->id}}"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary pull-right" onclick="vehicle.uploadImage();">Subir</button>
            </div>
        </div>
    </div>
</div>