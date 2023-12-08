<ul class="sidebar-menu">
    <li class="header">Menu</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> <span>Inicio</span></a></li>
    <!-- <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li> -->
    <li class="treeview">
        <a href="#"><i class="fa fa-list"></i> <span>Proyectos</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="{{ route('project.index') }}"><i class="fa fa-eye"></i>Ver proyectos</a></li>
            <li><a href="{{ route('project.create') }}"><i class="fa fa-file"></i>Crear proyecto</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#"><i class="fa fa-list"></i> <span>Tareas</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="{{ route('tasks.index') }}"><i class="fa fa-eye"></i>Ver tareas</a></li>
            <li><a href="{{ route('tasks.create') }}"><i class="fa fa-file"></i>Crear tarea</a></li>
        </ul>
    </li>
</ul>