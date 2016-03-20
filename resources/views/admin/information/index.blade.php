@extends('admin.layout.main')

@section('contentheader_title')
    Características
@endsection

@section('contentheader_actions')
    <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal_create_information">Crear nueva característica</a>
@endsection

@section('main-content')
    @include('admin.information.form')
    @include('admin.information.group', ['items' => $motorbikes,'title' => 'Motos','class' => 'success' ])
    @include('admin.information.group', ['items' => $bicicles,'title' => 'Bicicletas','class' => 'warning' ])
    @include('admin.information.group', ['items' => $mobility,'title' => 'Movilidad reducida','class' => 'info' ])
@endsection

