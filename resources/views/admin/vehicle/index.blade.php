@extends('admin.layout.main')

@section('contentheader_title')
    {{ trans('bikes.'. $type) }}
@endsection

@section('contentheader_actions')
    <a href="#" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modal_create_vehicle">Crear {{ trans('bikes.'. $type) }}</a>
@endsection

@section('main-content')
    @include('admin.vehicle.form',['categories' => $categories,'type' => $type])
    @include('admin.vehicle.group', ['items' => $vehicles, 'title' => trans('bikes.'. $type),'class' => 'success' ])
@endsection

