@extends('admin.layout')

@section('header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Proyectos
        <small>Listado de todos los proyectos</small>
      </h1>
      <br>
      <br>
      <a href="{{ route('project.create') }}" class="btn btn-success"><i class="fa fa-pencil">Nuevo</i></a>
      <ol class="breadcrumb">
      <li class="active"><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>
        <li class="active">Proyectos</li>
      </ol>
    </section>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Listado de los proyectos</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Descripción</td>
                        <td>Fecha Inicio</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->initial_date }}</td>
                            <td>
                                <a href="{{ url('admin/project/edit',$project->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                <a href="{{ url('admin/project/delete',$project->id) }}" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@stop