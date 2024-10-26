<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceDashboardController extends Controller
{
    public function create()
    {
        return view('admins.services.create');
    }
    
    public function services_list()
    {
        $services = Service::all();
        return view('admins.services.view', compact('services'));
    }
    
    public function store(Request $request)
    {
        // Handle the icon upload
        if ($request->hasFile('icon')) {
            // Get the original name of the icon
            $iconName = $request->icon->getClientOriginalName();
            // Move the icon to the public/images/icons directory
            $request->icon->move(public_path('images/icons'), $iconName);
            // Set the path to be saved in the database
            $iconPath = '' . $iconName;
        } else {
            $iconPath = null; // Set to null if no icon is uploaded
        }
    
        // Handle the main image upload
        if ($request->hasFile('image')) {
            // Get the original name of the image
            $imageName = $request->image->getClientOriginalName();
            // Move the image to the public/images directory
            $request->image->move(public_path('images/servicesimages'), $imageName);
            // Set the path to be saved in the database
            $imagePath = '' . $imageName;
        } else {
            $imagePath = null; // Set to null if no image is uploaded
        }
    
        // Save the service data
        Service::create([
            'title' => $request->title,
            'icon' => $iconPath, // Save the icon file path
            'image' => $imagePath, // Save the main image file path
            'description' => $request->description,
        ]);
    
        return redirect()->back()->with('success', 'Service created successfully.');
    }
    
    public function delete($id)
    {
        // Find the service by ID
        $service = Service::find($id);
    
        if ($service) {
            // Check if the service has an associated icon
            if ($service->icon) {
                $existingIconPath = public_path('images/icons/' . $service->icon); // Added missing slash
                // Check if the icon file exists and delete it
                if (file_exists($existingIconPath)) {
                    unlink($existingIconPath);
                }
            }
    
            // Check if the service has an associated image
            if ($service->image) {
                $existingImagePath = public_path('images/servicesimages/' . $service->image); // Added missing slash
                // Check if the image file exists and delete it
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }
    
            // Delete the service record from the database
            $service->delete();
    
            // Redirect back with a success message
            return redirect()->back()->with('success', 'Service deleted successfully!');
        } else {
            // Redirect back with an error message if the service is not found
            return redirect()->back()->with('error', 'Service not found!');
        }
    
    
    }
}
