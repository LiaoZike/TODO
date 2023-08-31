<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function  index(){
        $tasks=Task::all();
        $data=[
            'tasks'=>$tasks,
        ];
        return view('home.index',$data);
    }

    public function create()
    {
        return view('home.tasks/create');
    }

    public function store(Request $request){
        $task=$request->all();

        if($task['name']==null || $task['title']==null || $task['content']==null){
            abort(404);
        }
        if($task['note']==null){
            $task['note']="無";
        }
        Task::create($task);
        return redirect()->route('home.index');
    }

}
