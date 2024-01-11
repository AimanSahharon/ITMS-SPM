<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developers = Developer::all();
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
        return view('developer.show',compact('developer'));
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
