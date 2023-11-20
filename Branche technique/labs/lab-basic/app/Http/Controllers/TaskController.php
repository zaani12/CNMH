<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::paginate(3);
        return view('home',compact('tasks'));
    }
    public function create(){
    $projects = Project::all();
        return view('add' , compact('projects'));
    }
    public function store(Request $request){
        $task = new Task;
        $validatedData = $request->validate([
            'nom' => 'required | max:50',
          'projetId' => 'required',
          'description' => 'required'
        ]);
        $task::create($validatedData);
        return redirect()->route('add.task')->with('success' , 'tache a été ajouter avec succés');
    }
    public function edit($id){
        $task = Task::findOrFail($id);
        $projects = Project::all();
        return view('edit' , compact('task' , 'projects'));
    }
    public function update(Request $request , $id){
        $task = Task::findOrFail($id);
        $validatedData = $request->validate([
            'nom' => 'required | max:50',
          'projetId' => 'required',
          'description' => 'required'
        ]);
        $task->update($validatedData);
        return redirect()->route('edit.task' , ['id' => $task->id])->with('success' , 'tache a été modifier avec succés');
    }
    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->delete();
        $tasks = Task::paginate(3);
        return view('home' , compact('tasks'));
    }
    public function search(Request $request){
        $searchQuery = $request->input('search');
        $results = Task::where('nom' , 'like' , '%' . $searchQuery .'%')->orWhere('description' , 'like' , '%' . $searchQuery . '%')->paginate('3');
        return response()->json([
            'data' => $results->items(),
            'links' =>   $results->links()->toHtml(),
        ]);
    }
}
