@extends('admin.layout.main')

@section('contentheader_title')
    {{$vehicle->name['es']}}
@endsection

@section('contentheader_actions')
@endsection

@section('main-content')

    @include('admin.vehicle.edit.informationform')

    <div class="col-md-3">
        @include('admin.vehicle.edit.form')
    </div>

    <div class="col-md-7">
        @include('admin.vehicle.edit.vehicle_informations')
    </div>

    <div class="col-md-2">
        @include('admin.vehicle.edit.informations')
    </div>

@endsection
