@extends('admin.layout.main')

@section('contentheader_title')
@endsection

@section('contentheader_actions')
@endsection

@section('main-content')
    <div class="col-lg-12">
        <div class="box box-solid box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Reservas</h3>
                <div class="box-tools pull-right" id="reservation-filter">
                    <button type="button" class="btn btn-box-tool" data-url="{{route('reservations',['filter-status' => ''])}}">Todas</button>
                    <button type="button" class="btn btn-box-tool reservation-status-0" data-url="{{route('reservations',['status' => 0])}}">Pendientes</button>
                    <button type="button" class="btn btn-box-tool reservation-status-1" data-url="{{route('reservations',['status' => 1])}}">En proceso</button>
                    <button type="button" class="btn btn-box-tool reservation-status-2" data-url="{{route('reservations',['status' => 2])}}">Cerradas</button>
                </div>
            </div>
            <div class="box-body" id="reservation-list">
                @include('admin.reservation._list')
            </div>
        </div>
    </div>
@endsection

