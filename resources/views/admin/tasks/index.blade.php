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
    <!-- /.box-header -->
    <div class="box-body">
            <table id="table" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Descripción</td>
                        <td>Fecha Fin</td>
                        <td>Proyecto</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                          
                            <td>
                              <input type="hidden" name="task" value="{{ $task->id }}">
                              {{ $task->title }}
                            </td>
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->finish_date }}</td>
                            <td>{{ $task->project->name }}</td>
                            <td>
                                <a href="{{ url('admin/comments/create', $task->id) }}" class="btn btn-xs btn-success" title="Realizar Comentarios"><i class="fa fa-commenting"></i></a>
                                <a href="{{ url('admin/comments', $task->id) }}" class="btn btn-xs btn-primary" title="Ver Comentarios"><i class="fa fa-eye" data-bs-toggle="modal" data-bs-target="#exampleModal"></i></a>
                            </td>
                          
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
@stop

@push('scripts')
<script src="/adminLte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminLte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- jQuery 2.2.3 -->
<script src="/adminLte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/adminLte/bootstrap/js/bootstrap.min.js"></script>
<!-- /AdminLTE App -->
<script src="/adminLte/js/app.min.js"></script>
<script>
  $(function () {
    $("#table").DataTable();    
  });
</script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endpush