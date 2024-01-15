<?php

namespace App\Http\Controllers;

use App\Models\Bunit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BunitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userLevel = Auth::user()->user_level;

        if ($userLevel == 0 || $userLevel == 1) {
            $bunits = Bunit::all();
        } else {
            $userEmail = Auth::user()->email;
            $bunits = Bunit::where('Email', $userEmail)->get();
        }
        //$bunits = Bunit::all();
        return view('bunit.index', compact('bunits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bunit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'BUID' =>'required|min:4|string|max:255',
            'Name' =>'required|min:4|string|max:255',
            'Email'=>'required|min:6|string|max:255',
            'PhoneNumber' => 'required|min:10|Numeric'
        ]);


        $bunit = new Bunit;
        $bunit->BUID = $request->BUID;
        $bunit->Name = $request->Name;
        $bunit->Email = $request->Email;
        $bunit->PhoneNumber = $request->PhoneNumber;
        $bunit->save();

        return redirect()->route('bunit.index')
            ->withSuccess('New Business Unit added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bunit $bunit)
    {
        return view('bunit.show',compact('bunit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bunit $bunit)
    {
        return view('bunit.edit',compact('bunit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bunit $bunit)
    {
        $validated = $request->validate([
            'BUID' =>'required|min:4|string|max:255',
            'Name' =>'required|min:4|string|max:255',
            'Email'=>'required|min:6|string|max:255',
            'PhoneNumber' => 'required|min:10|Numeric'
        ]);

        $bunit->update($request->all());

        return redirect()->route('bunit.index')
            ->withSuccess('Business Unit record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bunit $bunit)
    {
        $bunit->delete();
        return redirect()->route('bunit.index');
    }
}
