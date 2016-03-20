@extends('admin.layout.main')

@section('contentheader_title')
    Categorias
@endsection

@section('main-content')

<div class="col-md-3">
    <div class="box box-solid box-danger">
        <div class="box-header">
            <h2 class="box-title">Crear Nuevo</h2>
        </div>
        <div class="box-body">
            @include('admin.category.form')
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="box box-solid box-success">
        <div class="box-header">
            <h2 class="box-title">Motos</h2>
        </div>
        <div class="box-body">
            <table class="table table-striped bring-up nth-2-center">
                @foreach($categories as $category)
                    @if($category->type == \App\Models\Category::TYPE_MOTORBIKE)
                        <tr>@include('admin.category.item')</tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="box box-solid box-warning">
        <div class="box-header">
            <h2 class="box-title">Bicicletas</h2>
        </div>
        <div class="box-body">
            <table class="table table-striped bring-up nth-2-center">
                @foreach($categories as $category)
                    @if($category->type == \App\Models\Category::TYPE_BIKE)
                        <tr>@include('admin.category.item')</tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="box box-solid box-info">
        <div class="box-header">
            <h2 class="box-title">Movilidad reducida</h2>
        </div>
        <div class="box-body">
            <table class="table table-striped bring-up nth-2-center">
                @foreach($categories as $category)
                    @if($category->type == \App\Models\Category::TYPE_MOBILITY)
                        <tr>@include('admin.category.item')</tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection

