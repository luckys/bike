@extends('admin.layout.main')

@section('contentheader_title')
@endsection

@section('contentheader_actions')
    <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal_create_category">Crear nueva categoría</a>
@endsection

@section('main-content')
    @include('admin.category.form')
    @include('admin.category.group', ['items' => $motorbikes, 'title' => 'Motos','class' => 'success' ])
    @include('admin.category.group', ['items' => $bicicles,'title' => 'Bicicletas','class' => 'warning' ])
    @include('admin.category.group', ['items' => $mobility,'title' => 'Movilidad reducida','class' => 'info' ])
@endsection

