<?php

namespace App\Http\Controllers;

use App\Models\Bunit;
use App\Models\Developer;
use App\Models\Project;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Progress;

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
        //$bunit = Bunit::all();
        //$lead_developer = Developer::all();
        return view('project.create'); //['bunit'=>$bunit], ['lead_developer'=>$lead_developer]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $validated = $request->validate([
            'ProjectID' =>'required|min:1|string|max:255',
            'Title'=>'required|min:1|string|max:255',
            //'System_Owner' => 'required|min:1|string|max:255',
            'PIC' =>'required|min:1|string|max:255',
            //'Lead_Developer' =>'required|min:1|string|max:255',
            //'Start_Date' =>'required|min:1|string|max:255',
            //'End_Date' =>'required|min:1|string|max:255',
            //'Duration' =>'required|min:1|string|max:255',
            'Status' =>'required|min:1|string|max:255',
            'Methodology' =>'required|min:1|string|max:255',
            'System_Platform' =>'required|min:1|string|max:255',
            'Deployment_Type' =>'required|min:1|string|max:255',
        ]);


        $project = new Project;
        $project->ProjectID = $request->ProjectID;
        $project->Title = $request->Title;
        //$project->System_Owner = $request->System_Owner;
        $project->PIC = $request->PIC;
        //$project->Lead_Developer = $request->Lead_Developer;
        $project->Start_Date = $request->Start_Date;
        $project->End_Date = $request->End_Date;

        $startDate = new DateTime($request->Start_Date);
        $endDate = new DateTime($request->End_Date);
        $dayDifference = $endDate->diff($startDate)->days;
        $project->Duration = $dayDifference;
        $project->Status = $request->Status;
        $project->Methodology = $request->Methodology;
        $project->System_Platform = $request->System_Platform;
        $project->Deployment_Type = $request->Deployment_Type;


        $project->save();

        //$developer = Developer::find($request->Name);
        //$developer->projects()->save($project);

        //$bunit = Bunit::find($request->BUID);
        //$bunit->projects()->save($project);

        //$selectedBunit = $request->input('bunits');

        // Add the selected subjects to the student (this is just an example, modify as needed)
        //$project->bunits()->attach($selectedBunit);

        return redirect()->route('project.index')
            ->withSuccess('New Project has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $allDevelopers = Developer::all();
        $allBunits = Bunit::all();
        return view('project.show',compact('project', 'allDevelopers', 'allBunits'));
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
        /*$validated = $request->validate([
            'ProjectID' =>'required|min:4|string|max:255',
            //'BUID' =>'required|min:4|string|max:255',
            'Title'=>'required|min:6|string|max:255',
            //'System_Owner' => 'required|min:4|string|max:255',
            'PIC' =>'required|min:4|string|max:255',
            //'Lead_Developer' =>'required|min:4|string|max:255',
            //'Start_Date' =>'required|min:4|string|max:255',
            //'End_Date' =>'required|min:4|string|max:255',
            //'Duration' =>'required|min:4|string|max:255',
            'Status' =>'required|min:4|string|max:255',
            'Methodology' =>'required|min:1|string|max:255',
            'System_Platform' =>'required|min:1|string|max:255',
            'Deployment_Type' =>'required|min:1|string|max:255',
        ]); */

        $project->update($request->all());
        $startDate = new DateTime($project->Start_Date);
        $endDate = new DateTime($project->End_Date);
        $dayDifference = $endDate->diff($startDate)->days;
        $project->update(['Duration' => $dayDifference]);

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

    public function addToDeveloper(Request $request, $projectId)
    {
        // Implement the logic to add subjects for the given student
        // You can access the selected subjects via $request->input('subjects')

        // Example logic:
        $project = Project::find($projectId);
        $selectedDevelopers = $request->input('developers');

        // Add the selected subjects to the student (this is just an example, modify as needed)
        $project->developers()->attach($selectedDevelopers);

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Developer added successfully');
    }

    public function dropAllDevelopers($projectId)
    {
        // Implement the logic to drop all subjects for the given student
        // Example:
        $project = Project::find($projectId);

        // Detach all subjects for the student
        $project->developers()->detach();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'All developers dropped successfully');
    }

    public function dropDeveloper($projectId, $developerId)
    {
        // Implement the logic to drop a specific subject for the given student
        // Example:
        $project = Project::find($projectId);

        // Detach the specific subject for the student
        $project->developers()->detach($developerId);

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Developer dropped successfully');
    }




    public function addToLeadDeveloper(Request $request, $projectId)
    {
        // Implement the logic to add subjects for the given student
        // You can access the selected subjects via $request->input('subjects')

        // Example logic:
        $project = Project::find($projectId);
        $selectedDevelopers = $request->input('developers');

        // Add the selected subjects to the student (this is just an example, modify as needed)
        $project->leaddevelopers()->attach($selectedDevelopers);

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Lead Developer added successfully');
    }

    public function dropLeadDeveloper($projectId, $developerId)
    {
        $project = Project::find($projectId);

        // Detach all subjects for the student
        $project->leaddevelopers()->detach();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Lead developers dropped successfully');
    }

    public function addToBunit(Request $request, $projectId)
    {
        // Implement the logic to add subjects for the given student
        // You can access the selected subjects via $request->input('subjects')

        // Example logic:
        $project = Project::find($projectId);
        $selectedBunit = $request->input('bunits');

        // Add the selected subjects to the student (this is just an example, modify as needed)
        $project->bunits()->attach($selectedBunit);

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Business Unit added successfully');
    }

    public function dropBunit($projectId, $developerId)
    {
        $project = Project::find($projectId);

        // Detach all subjects for the student
        $project->bunits()->detach();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Business Unit dropped successfully');
    }

    // ProjectController.php

    public function progress(Project $project)
    {
        $progress = $project->progress;
        return view('project.progress', compact('project', 'progress'));
    }

    public function storeProgress(Request $request, Project $project)
    {
        $request->validate([
            'ReportID' => 'required|string',
            'Date_Report' => 'required|date',
            'Status' => 'required|string',
            'Description' => 'required|string',
        ]);

        $progress = $project->progress()->create([
            'ReportID' => $request->ReportID,
            'Date_Report' => $request->Date_Report,
            'Status' => $request->Status,
            'Description' => $request->Description,
        ]);

        return redirect()->route('project.progress', $project->id)->withSuccess('Progress added successfully');
    }

    public function editProgress(Project $project, Progress $progress)
    {
        return view('project.editProgress', compact('project', 'progress'));
    }

    public function deleteProgress(Project $project, Progress $progress)
    {
        $progress->delete();
        return redirect()->route('project.progress', $project->id)->withSuccess('Progress entry deleted successfully');
    }

    public function updateProgress(Request $request, Project $project, Progress $progress)
    {
        /*$validatedData = $request->validate([
            'ReportID' => 'required|string',
            'Date_Report' => 'required|date',
            'Status' => 'required|string',
            'Description' => 'required|string',
        ]); */

       // $progress->update($validatedData);
        $project->update($request->all());

        return redirect()->route('project.progress', $project->id)->withSuccess('Progress entry updated successfully');
    }









}
