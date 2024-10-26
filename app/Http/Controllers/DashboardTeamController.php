<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class DashboardTeamController extends Controller
{
    public function create()
    {
       
        return view('admins.team.create');
    }


    public function store(Request $request)
    {
        // Handle file upload
        if ($request->hasFile('image')) {
            // Get the original name of the image
            $imageName = $request->image->getClientOriginalName();
            // Move the image to the public/images/teams directory
            $request->image->move(public_path('images/teams'), $imageName);
            // Set the path to be saved in the database
            $imagePath = '' . $imageName;
        } else {
            $imagePath = null; // Set to null if no image is uploaded
        }
    
        // Create new team member
        Team::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $imagePath,  // Save the image path
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
        ]);
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Team member created successfully!');
    }

    
    public function list()
    {
        $teams = Team::all();
        return view('admins.team.view', compact('teams'));
    }

    public function delete($id)
{
    // Find the team by ID
    $team = Team::find($id);

    if ($team) {
        // Check if the team has an associated image
        if ($team->image) {
            $existingIconPath = public_path('images/teams/' . $team->image); // Added missing slash
            // Check if the icon file exists and delete it
            if (file_exists($existingIconPath)) {
                unlink($existingIconPath);
            }
        }

        // Delete the team record from the database
        $team->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Team deleted successfully!');
    } else {
        // Redirect back with an error message if the team is not found
        return redirect()->back()->with('error', 'Team not found!');
    }
}

    
    
}
