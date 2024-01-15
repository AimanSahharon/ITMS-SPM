<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userLevel = Auth::user()->user_level;

        if ($userLevel == 0 || $userLevel == 1) {
            $developers = Developer::all();
        } else {
            $userEmail = Auth::user()->email;
            $developers = Developer::where('Email', $userEmail)->get();
        }
        //$userEmail = Auth::user()->email;
        //$developers = Developer::where('Email', $userEmail)->get();
        //$developers = Developer::all();
        return view('developer.index', compact('developers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('developer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'DevID' =>'required|min:4|string|max:255',
            'Name' =>'required|min:4|string|max:255',
            'Email'=>'required|min:6|string|max:255',
            'PhoneNumber' => 'required|min:10|Numeric'
        ]);


        $developer = new Developer;
        $developer->DevID = $request->DevID;
        $developer->Name = $request->Name;
        $developer->Email = $request->Email;
        $developer->PhoneNumber = $request->PhoneNumber;
        $developer->save();

        return redirect()->route('developer.index')
            ->withSuccess('New Developer added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Developer $developer)
    {
        $allProject = Project::all();
        return view('developer.show',compact('developer', 'allProject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Developer $developer)
    {
        return view('developer.edit',compact('developer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Developer $developer)
    {
        $validated = $request->validate([
            'DevID' =>'required|min:4|string|max:255',
            'Name' =>'required|min:4|string|max:255',
            'Email'=>'required|min:6|string|max:255',
            'PhoneNumber' => 'required|min:10|Numeric'
        ]);

        $developer->update($request->all());

        return redirect()->route('developer.index')
            ->withSuccess('Developer record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Developer $developer)
    {
        $developer->delete();
        return redirect()->route('developer.index');
    }
}
