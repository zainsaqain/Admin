<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function create()
    {
        return view('teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'), $imageName); // Store in public/images
            $imagePath = $imageName;
        }
    
        Team::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $imagePath,
            'user_id' => auth()->id(), // Set the user_id to the currently authenticated user's ID
        ]);
    
        return redirect()->route('teams.index')->with('success', 'Team member added successfully.');
    }
    

    public function update(Request $request, $id)
{
    $team = Team::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
    ]);

    $team->name = $request->name;
    $team->description = $request->description;

    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($team->image && file_exists(public_path('images/' . $team->image))) {
            unlink(public_path('images/' . $team->image));
        }

        $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('images'), $imageName); // Store in public/images
        $team->image = $imageName;
    }

    // Save the user_id if it is not set already (optional)
    if (!$team->user_id) {
        $team->user_id = auth()->id(); // Set the user_id to the currently authenticated user's ID
    }

    $team->save();

    return redirect()->route('teams.index')->with('success', 'Team updated successfully');
}

    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        if ($team->image && file_exists(public_path('images/' . $team->image))) {
            unlink(public_path('images/' . $team->image));
        }

        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team deleted successfully');
    }
}
