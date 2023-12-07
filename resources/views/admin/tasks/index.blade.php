@extends('admin.layout')

@section('header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tareas
        <small>Listado de todas las tareas</small>
      </h1>
      <ol class="breadcrumb">
      <li class="active"><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>
        <li class="active">Tareas</li>
      </ol>
    </section>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Listado de tareas</h3>
        </div>
    </div>
@stop