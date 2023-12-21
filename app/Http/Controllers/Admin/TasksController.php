<?php

namespace App\Http\Controllers\Admin;
use App\Models\Task;
use App\Models\Proyect;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::with('project')->get();
        // dd($tasks);
        return view('admin.tasks.index',compact('tasks'));
    }

    public function create(){
        $estados = Status::all();
        $proyectos = Proyect::all();
        //dd($proyectos);
        return view('admin.tasks.create',compact('estados','proyectos'));
    }

    public function store(Request $request){
        try {
            // dd($request->all());
            $user = Auth::user();
            $task = new Task;
            $task->title = $request->name;
            $task->description = $request->description;
            $task->finish_date = $request->finish_date;
            $task->status_id = 3;
            $task->project_id = $request->project;
            $task->user_created_id = $user->id;
            $task->save();

            return back()->with('flash', 'Tu proyecto ha sigo creado con exito');

        } catch (\Throwable $th) {
            dd($th->getMessage());
            //throw $th;
        }
    }
}
