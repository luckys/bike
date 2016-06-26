<ul id="sortable_information_vehicle" data-vehicleid="{{$vehicle->id}}">
    @foreach($vehicleInformations as $vehicleInformation)
        <li class="ui-state-default" id="sortable_vehicle_information_id_{{$vehicleInformation->pivot->information_id}}">
            <div class="panel panel-default">
                <div class="panel-heading">{{$vehicleInformation->name['es']. " / ". $vehicleInformation->name['en'] ." / ".
                    $vehicleInformation->name['de']}}
                    <div class="pull-right">
                        @include('elements.delete_button',['route' => ['vehicles.removeinformation',
                                             $vehicleInformation->pivot->vehicle_id, $vehicleInformation->id ]])
                    </div>
                </div>
                <div class="panel-body">
                    @if($vehicleInformation->fieldtype == 'input')
                        <div class="col-lg-4">
                            <strong>ES</strong> : {{json_decode($vehicleInformation->pivot->value)->es}}
                        </div>
                        <div class="col-lg-4">
                            <strong>EN</strong> : {{json_decode($vehicleInformation->pivot->value)->en}}
                        </div>
                        <div class="col-lg-4">
                            <strong>DE</strong> : {{json_decode($vehicleInformation->pivot->value)->de}}
                        </div>
                    @else
                        <div class="col-lg-4">
                            {{(json_decode($vehicleInformation->pivot->value)->es == "1" ? "Sí" : "No")}}
                        </div>
                    @endif
                </div>
            </div>
        </li>
    @endforeach
</ul>