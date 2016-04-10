@foreach($vehicleInformations as $vehicleInformation)
    <div class="panel panel-default">
        <div class="panel-heading">{{$vehicleInformation->name['es']}}

        </div>
        <div class="panel-body">
            @if($vehicleInformation->fieldtype == 'input')
                <div class="col-md-4">
                    <strong>ES</strong> : {{json_decode($vehicleInformation->pivot->value)->es}}
                </div>
                <div class="col-md-4">
                    <strong>EN</strong> : {{json_decode($vehicleInformation->pivot->value)->en}}
                </div>
                <div class="col-md-4">
                    <strong>DE</strong> : {{json_decode($vehicleInformation->pivot->value)->de}}
                </div>
            @else
                <div class="col-md-4">
                    {{(json_decode($vehicleInformation->pivot->value)->es == "1" ? "Sí" : "No")}}
                </div>
            @endif
        </div>
    </div>
@endforeach