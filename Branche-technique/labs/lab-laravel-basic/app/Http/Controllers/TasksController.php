<?php

namespace App\Http\Controllers;
use App\Models\Tasks;
use Illuminate\Http\Request;
use App\Models\Projects;
class TasksController extends Controller
{
    public function index(){
        $tasks = tasks::paginate(3);
        return view('home',compact('tasks'));
    }
    public function create(){
        $projects = projects::all();
        return view('add',compact('projects'));
    }
    public function store(Request $request){
        $task = new tasks;
        $validatedData = $request->validate([
            'nom' => 'required | max:50',
            'projetId' => 'required',
            'description' => 'required'
        ]);
        $task::create($validatedData);
         return redirect()->route('add.task')->with('success' , 'tache a été ajouter avec succés');

    }


}

