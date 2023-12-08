<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Proyect;
use App\Models\Status;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

class ProjectController extends Controller
{
    public function index(){
        $projects = Proyect::all();
        return view('admin.projects.index',compact('projects'));
    }

    public function create(){
        $estados = Status::all();
        return view('admin.projects.create',compact('estados'));
    }

    public function store(Request $request){
        try {
            $user = Auth::user();
            $project = new Proyect;
            $project->name = $request->name;
            $project->description = $request->description;
            $project->initial_date = Carbon::parse($request->initial_date);
            $project->user_created_id = $user->id;
            $project->save();

            return back()->with('flash', 'Tu proyecto ha sigo creado con exito');

        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
