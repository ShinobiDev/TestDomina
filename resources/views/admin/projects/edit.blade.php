@extends('admin.layout')

@section('header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Proyectos
        <small>Edición de proyectos</small>
      </h1>
      <ol class="breadcrumb">
      <li class="active"><a href="{{ route('project.index') }}"><i class="fa fa-dashboard"></i> <span>Proyectos</span></a></li>
        <li class="active">Editar Proyectos</li>
      </ol>
    </section>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Formulario para editar un proyecto</h3>
                </div>
                <form method="POST" action="{{ route('project.update') }}">
                {{ csrf_field() }}
                    <div class="box-body">
                        <input type="hidden" name="project" value="{{ $project->id }}">
                        <div class="form-group">
                            <label for="">Nombre del proyecto</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre del proyecto" value="{{ $project->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Descripción del proyecto">{{ $project->description }}</textarea>
                        </div>
                        <div class="form-group" >
                            <label for="">Fecha Inicio</label>
                            <input type="date" class="form-control col-md-6" name="initial_date" value="{{ $project->initial_date }}">
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-sm btn-success">Editar Proyecto</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

@stop