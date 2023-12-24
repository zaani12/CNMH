<?php

namespace App\Http\Controllers;
use App\Models\Tasks;
use Illuminate\Http\Request;
use App\Models\Projects;
class TasksController extends Controller
{
    public function index(){
        $tasks = tasks::paginate(2);
        // dd($tasks);
        return view('home',compact('tasks'));
    }
    public function create(){
        $projects = projects::all();
        return view('add',compact('projects'));
    }
    public function store(Request $request){
        // $task = new tasks;

        $validatedData = $request->validate([
            'nom' => 'required',
            'projetId' => 'required',
            'description' => 'required'
        ]);
        // dd($validatedData);


        tasks::create($validatedData);


        return redirect()->route('add.task')->with('success' , 'tache a été ajouter avec succés');
    }
    public function edit($id){
        $task = tasks::findOrFail($id);
        $projects = Projects::all();
        return view('edit' , compact('task' , 'projects'));
    }
    public function update(Request $request , $id){
        $task = tasks::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required | max:50',
          'projetId' => 'required',
          'description' => 'required'
        ]);
        $task->update($validatedData);
        return redirect()->route('edit.task' , ['id' => $task->id])->with('success' , 'tache a été modifier avec succés');
    }
    public function destroy($id){
        $task = Tasks::findOrFail($id);
        $task->delete();
        $tasks = Tasks::paginate(3);
        return view('home' , compact('tasks'));
    }

    public function searchTask(Request $request, $project)
    {
        $search = $request->input('search');
        $project = Project::findOrFail($project);

        // Check if the search value is empty
        if (empty($search)) {
            $tasks = Task::where('project_id',$project->id)->paginate(3);
        } else {
            $tasks = Task::where('project_id', $project->id)->where('name', 'like', '%' . $search . '%')->paginate(3);
        }

        // Controller code
        if ($request->ajax()) {
            return response()->json([
                'table' => view('task.table', compact('tasks', 'project'))->render(),
                'pagination' => $tasks->links()->toHtml(),
            ]);
        }

    }

}

