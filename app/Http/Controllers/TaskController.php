<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;
class TaskController extends Controller
{

	public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return view('tasks.index', compact('tasks'));
    }

	public function store(TaskRequest $request)
	{	
        try{
            $task = new Task;
            $task->name = $request->name;  
            $task->save();
            return redirect(route('tasks.index'))->with('success', trans('task.message-add-success'));
        } catch (Exception $exception) {
            return redirect(route('tasks.index'))->with('fail', trans('task.message-add-fail'));
        }
		
	}

    public function destroy($id)
    {
        try {
            $task = Task::findOrFail($id);
            $task->delete();
            return redirect("/tasks")->with('success', trans('task.message-del-success'));
        } catch (Exception $exception) {
            return redirect("/tasks")->with('fail', trans('task.message-del-fail'));
        }
    }

}
