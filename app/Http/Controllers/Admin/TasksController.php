<?php

namespace App\Http\Controllers\Admin;
use App\Models\Task;
use App\Models\Status;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index(){
        $task = Task::all();
        return view('admin.tasks.index',compact('task'));
    }

    public function create(){
        $estados = Status::all();
        return view('admin.tasks.create',compact('estados'));
    }

    public function store(Request $request){
        dd($request->all());
        try {

            $task = new Task;
            

            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
