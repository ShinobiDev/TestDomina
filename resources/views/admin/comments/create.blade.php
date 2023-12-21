@extends('admin.layout')

@section('header')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tarea {{ $task->title }}
        <small>Comentarios</small>
      </h1>
      <ol class="breadcrumb">
      <li class="active"><a href="{{ route('tasks.index') }}"><i class="fa fa-dashboard"></i> <span>Comentarios</span></a></li>
        <li class="active">Crear Comentario</li>
      </ol>
    </section>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Formulario para crear un comentario</h3>
                </div>
                <form method="POST" action="{{ route('comment.store') }}">
                {{ csrf_field() }}
                    <div class="box-body">
                        
                        <div class="form-group">
                            <label for="">Comentario</label>
                            <input type="hidden" name="task" value="{{ $task->id }}">
                            <textarea class="form-control" name="content" id="" cols="30" rows="10" placeholder="Ingrese su comentario"></textarea>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-sm btn-success">Crear Comentario</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

@stop