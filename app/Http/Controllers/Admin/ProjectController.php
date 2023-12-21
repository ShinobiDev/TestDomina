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
        $projects = Proyect::where('status_id',1)->get();
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
            $project->status_id = 1;
            $project->save();

            $projects = Proyect::where('status_id',1)->get();
            return view('admin.projects.index',compact('projects'));

        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
    public function edit($id){
        $estados = Status::all();
        // dd('Llego a editar');

        $project = Proyect::where('id',$id)->first();
        // dd($project);
        return view('admin.projects.edit',compact('project'));
    }

    public function update(Request $request){
        
        // dd($request->all());
        $user = Auth::user();
        $project = Proyect::where('id',$request->project)->first();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->initial_date = Carbon::parse($request->initial_date);
        $project->user_created_id = $user->id;
        $project->update();
        // dd($project);

        $projects = Proyect::where('status_id',1)->get();
        return view('admin.projects.index',compact('projects'));
    }

    public function delete($id){
        $project = Proyect::where('id',$id)->first();
        $project->status_id = 2;
        $project->update();
        // dd($project);
        $projects = Proyect::where('status_id',1)->get();
        return view('admin.projects.index',compact('projects'));
    }
}
