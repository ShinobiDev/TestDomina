@extends('admin.layout')
@section('header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{$task->project->name}}
        <small>Tarea <b>{{$task->title}}</b></small> 
      </h1>
      <ol class="breadcrumb">
      <li class="active"><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>
        <li class="active"><a href="{{ route('tasks.index') }}">Tareas</a></li>
        <li class="active">Comentarios</li>
      </ol>
    </section>
@stop

@section('content')
    <div class="box box-success">
        <div class="box-header">
            <h3 class="box-title">Listado de comentarios de la tarea <b>{{ $task->title }}</b></h3>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
            <table id="table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>Autor</td>
                        <td>Fecha</td>
                        <td>Comentario</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>
                              {{ $comment->users->name }}
                            </td>
                            <td>{{ $comment->created_at }}</td>
                            <td>{{ $comment->content }}</td>                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
@stop
