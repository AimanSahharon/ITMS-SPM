<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ProjectID' =>'required|min:4|string|max:255',
            'BUID' =>'required|min:4|string|max:255',
            'Title'=>'required|min:6|string|max:255',
            'System_Owner' => 'required|min:4|string|max:255',
            'PIC' =>'required|min:4|string|max:255',
            'Lead_Developer' =>'required|min:4|string|max:255',
            'Start_Date' =>'required|min:4|string|max:255',
            'End_Date' =>'required|min:4|string|max:255',
            'Duration' =>'required|min:4|string|max:255',
            'Status' =>'required|min:4|string|max:255',
        ]);


        $project = new Project;
        $project->ProjectID = $request->ProjectID;
        $project->BUID = $request->BUID;
        $project->Title = $request->Title;
        $project->System_Owner = $request->System_Owner;
        $project->PIC = $request->PIC;
        $project->Lead_Developer = $request->Lead_Developer;
        $project->Start_Date = $request->Start_Date;
        $project->End_Date = $request->Lead_Developer;
        $project->Duration = $request->Duration;
        $project->Status = $request->Status;


        $project->save();

        return redirect()->route('project.index')
            ->withSuccess('New Project has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('project.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'ProjectID' =>'required|min:4|string|max:255',
            'BUID' =>'required|min:4|string|max:255',
            'Title'=>'required|min:6|string|max:255',
            'System_Owner' => 'required|min:4|string|max:255',
            'PIC' =>'required|min:4|string|max:255',
            'Lead_Developer' =>'required|min:4|string|max:255',
            'Start_Date' =>'required|min:4|string|max:255',
            'End_Date' =>'required|min:4|string|max:255',
            'Duration' =>'required|min:4|string|max:255',
            'Status' =>'required|min:4|string|max:255',
        ]);

        $project->update($request->all());

        return redirect()->route('project.index')
            ->withSuccess('Project has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index');
    }
}
