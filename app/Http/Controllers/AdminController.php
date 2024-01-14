<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Retrieve all users
        $users = User::all();

        return view('admin.index', ['users' => $users]);
    }

    public function update(Request $request, $userId)
    {
        // Validate the request
        /*$request->validate([
            'user_level' => 'required|integer',
        ]); */

        // Find the user by ID
        $user = User::findOrFail($userId);

        // Update the user's user_level
        $user->update(['user_level' => $request->user_level]);

        return redirect()->route('admin.index')->withSuccess('success', 'User level updated successfully');
    }

    public function destroy($userId)
    {
        // Find the user by ID
        $user = User::findOrFail($userId);

        // Delete the user
        $user->delete();

        return redirect()->route('admin.index')->with('success', 'User deleted successfully');
    }


}
