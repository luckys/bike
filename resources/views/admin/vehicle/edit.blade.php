@extends('admin.layout.main')

@section('contentheader_title')

@endsection

@section('contentheader_actions')
@endsection

@section('main-content')

    @include('admin.vehicle.edit.informationform')

    <div class="col-lg-10">
        <div class="panel panel-info">
            <div class="panel-heading">{{$vehicle->name['es']}}</div>
            <div class="panel-body">
                <div class="col-lg-4">
                    @include('admin.vehicle.edit.form')
                    @include('admin.vehicle.edit.gallery')
                </div>
                <div class="col-lg-8">
                    @include('admin.vehicle.edit.vehicle_informations')
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        @include('admin.vehicle.edit.informations')
    </div>

@endsection
