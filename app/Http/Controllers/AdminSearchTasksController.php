<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class AdminSearchTasksController extends Controller
{
    public function index(){
        $tasks=Task::orderBy('updated_at','DESC')->get();
        $data=[
            'tasks'=>$tasks,
        ];
        return view('admin.tasks.search.index',$data);
    }
    public function search(Request $request){
//        dd($request->all());
        $query = Task::query();
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->has('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }

        if ($request->has('content')) {
            $query->where('content', 'like', '%' . $request->input('content') . '%');
        }
        if ($request->has('note')) {
            $query->where('note', 'like', '%' . $request->input('note') . '%');
        }
        $results = $query->get();
        $data=[
            'tasks'=>$results,
            'name'=>$request['name'],
            'title'=>$request['title'],
            'content'=>$request['content'],
            'note'=>$request['note'],
        ];
        return view('admin.tasks.search.show', $data);
    }
    public function ERROR(){
        abort(404);
    }
    public function searchTitle(Request $request){
        $temp =$request->all();
        $title= $temp['title'];
        if($title==null){
            abort(404);
        }
        $tasks=Task::where('title','=',$title)->orderBy('updated_at','DESC')->get();
        $data=[
            'tasks'=>$tasks,
            'empty'=>'no',
            'title'=>$title,
        ];
        return view('admin.tasks.search.title.index',$data);
    }
}
