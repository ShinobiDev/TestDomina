<?php

namespace App\Http\Controllers\Admin;
use App\Models\Comment;
use App\Models\Task;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index($id){
        // dd($id);
        try {
            $comments = Comment::with('users')->where('task_id',$id)->get();
            $task = Task::where('id', $id)->first();
            // dd($comments);
            return view('admin.comments.index',compact('comments','task'));
        } catch (\Throwable $th) {
           dd($th->getMessage());
        }
    }

    public function create($id){
        // dd($id);
        try {
            $task = Task::where('id', $id)->first();
            //$comments = Comment::where('task_id',$id)->get();
            // dd($task);
            return view('admin.comments.create',compact('task'));
        } catch (\Throwable $th) {
           dd($th->getMessage());
        }
    }

    public function store(Request $request){
        // dd($id);
        try {
            $user = Auth::user();
            $comment = new Comment;
            $comment->content = $request->content;
            $comment->date_comment = Carbon::now();
            $comment->user_id = $user->id;
            $comment->task_id = $request->task;
            $comment->save();

            $task = Task::where('id', $request->task)->first();

            $comments = Comment::where('task_id',$request->task)->get();
            return view('admin.comments.index',compact('comments','task'));
        } catch (\Throwable $th) {
           dd($th->getMessage());
        }
    }
}
