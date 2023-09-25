@extends('layouts.app')

@section('title')
Aulas
@endsection

@section('content')
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 page-container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 page-title">
            <h1><span class="fa fa-home"></span> Grados & Seccion</h1>
        </div>
    </div>

    <div class="menubar">
        @include('partials.menu_bar', ['buttonTitle' => 'Nuevo Grado'])
    </div>

    <div class="page-body" id="resource-container">
        @include('rooms.table')
    </div>
</div>

@include('rooms.modals')
@endsection

@section('scripts')
<script src="{{URL::asset('/js/rooms/index.js')}}"></script>
@endsection