@extends('admin.layout')

@section('header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tareas
        <small>Listado de todas las tareas</small>
      </h1>
      <ol class="breadcrumb">
      <li class="active"><a href="{{ route('tasks.index') }}"><i class="fa fa-dashboard"></i> <span>Tareas</span></a></li>
        <li class="active">Crear tareas</li>
      </ol>
    </section>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Formulario para crear una tarea</h3>
                </div>
                <form method="POST" action="{{ route('tasks.store') }}">
                {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Nombre de la tarea</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre de la tarea">
                        </div>
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Descripción de la tarea"></textarea>
                        </div>
                        <div class="form-group" >
                            <label for="">Fecha vencimiento</label>
                            <input type="date" class="form-control col-md-6" name="fecha_vencimiento">
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-sm btn-success">Crear Tarea</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

@stop