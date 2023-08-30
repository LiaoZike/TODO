<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class AdminTasksController extends Controller
{
    public function index()
    {
        $tasks=Task::orderBy('updated_at','DESC')->get();
        $data=[
            'tasks'=>$tasks,
        ];
        return view('admin.tasks.index',$data);
    }

    public function create()
    {
        return view('admin.tasks.create');
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
        return redirect()->route('admin.tasks.index');
    }

    public function edit($id)
    {
        $task=Task::find($id);
        if($task==null) abort(404);
        $data=[
            'task'=>$task,
        ];
        return view('admin.tasks.edit',$data);
    }

    public function update(Request $request, $id)
    {
        $task=Task::find($id);
        if($task==null) abort(404);
        $NewTask=$request->all();
        if($NewTask['name']==null || $NewTask['title']==null || $NewTask['content']==null){
            abort(404);
        }
        if($NewTask['note']==null){
            $NewTask['note']="無";
        }
        $task->update($NewTask);
        return redirect()->route('admin.tasks.index');
    }

    public function destroy($id){
        Task::destroy($id);
        return redirect()->route('admin.tasks.index');
    }
}
