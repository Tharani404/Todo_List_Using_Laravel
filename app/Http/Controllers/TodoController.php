<?php

namespace App\Http\Controllers;

use App\Models\TodoLists;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    protected $task; //define krnw

    public function __construct()
    {
        $this->task = new TodoLists(); 
    }

    public function index()
    {

        $response['tasks'] = $this->task->all();

        return view('pages.totdo.index')->with($response);
    }

    public function store(Request $request)
    {


        
        $this->task->title = $request->title;
        $this->task->save();

        $this->task->done = $request->done;
        //$this->task->save();

        //return redirect()->route('home');
        return redirect()->back();


        //$this->task->create($request->all());  
    }

    public function delete($task_id){
        $task = $this->task->find($task_id);
        $task ->delete();

        return redirect()->back();
    }

    public function done($task_id){ // ($task_id) <- this is parameter....... This parameter represents the ID of the task you want to mark as done.
        $task = $this->task->find($task_id);
        $task -> done = 1;
        $task -> update();

        return redirect()->back();

    }

    public function udone($task_id){ 
        $task = $this->task->find($task_id);
        $task -> done = 0;
        $task -> update();

        return redirect()->back();

    }

    






    // {
    //     $task_id = $this->task_id->find($id);

    // if ($task) {
    //     $task->delete();
    //     return redirect()->route('todo.index')->with('success', 'Task deleted successfully');
    // }

    // return redirect()->route('todo.index')->with('error', 'Task not found');
    // }
}
