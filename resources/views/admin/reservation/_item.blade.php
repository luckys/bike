<div class="box collapsed-box box-widget reservation-status-{{$reservation->status}}">
    <div class="box-header">
        <span class="info-box-icon">
            @if(!empty($reservation->vehicle->attachments[0]))
                <img src="{{$reservation->vehicle->attachments[0]['url']}}"></img>
            @endif
            {!! Form::open(['route' => ['reservations.setstatus', $reservation->id]]) !!}
                @if($reservation->status === 0)
                    <input type="hidden" name="status" value="1">
                    <button type="submit" class="btn btn-block reservation-status-1">Iniciar</button>
                @endif
                @if($reservation->status === 1)
                    <input type="hidden" name="status" value="2">
                    <button type="submit" class="btn btn-block reservation-status-2">Cerrar</button>
                @endif
            {!! Form::close() !!}
        </span>

        <div class="info-box-content">
            <div class="col-md-6 margin-bottom">
                <span class="info-box-number">{{$reservation->code}}</span>
                <span class="info-box-number">{{$reservation->rent_price}} € , {{$reservation->rent_duration}} días</span>
                <span class="info-box-text">{{$reservation->vehicle->name['es']}}</span>
            </div>
            <div class="col-md-5">
                <span class="info-box-text">{{$reservation->renter_name}}</span>
                <span class="info-box-text">{{$reservation->renter_email}}</span>
            </div>
            <div class="box-tools col-md-1">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div>
            <div class="col-md-12 progress" style="padding: 0">
                <div class="progress-bar progress-bar-striped"  style="width: {{$reservation->rent_percentage}}%;"></div>
            </div>
            <div class="col-md-12">
                {{$reservation->rent_start->toDayDateTimeString()}}
                <span class="pull-right">
                      {{$reservation->rent_end->toDayDateTimeString()}}
                </span>
            </div>
        </div>
    </div>

    <div class="box-body">
        <div class="col-md-6">
            <textarea class="form-control" rows="4" placeholder="Introduce una nota"></textarea>
        </div>
        <div class="col-md-6">
            @if($reservation->options)
                <dl>
                    @foreach($reservation->options as $name => $value)
                        <dt>{{$name}}</dt><dd>{{$value}}</dd>
                    @endforeach
                </dl>
            @endif
        </div>
    </div>
</div>




