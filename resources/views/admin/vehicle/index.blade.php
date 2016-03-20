@extends('admin.layout.main')

@section('contentheader_title')
    Vehículos
@endsection

@section('contentheader_actions')
    <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal_create_vehicle">Crear nuevo vehículo</a>
@endsection

@section('main-content')
    @include('admin.vehicle.form')

    @include('admin.vehicle.group', ['items' => $vehicles, 'title' => 'Motos','class' => 'success' ])
@endsection

