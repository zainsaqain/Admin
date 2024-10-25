<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

   


    public function create()
    {
        return view('services.create');
    }

    public function index()
    {
        // Retrieve all services from the database
        $services = Service::all();

        // Return the view with the services data
        return view('services.index', compact('services'));
    }


    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);
    
        $imagePath = null;
    
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('services'), $imageName);
            $imagePath = 'services/' . $imageName;
        }
    
        // Save the service data and associate it with the currently authenticated user
        $service = Service::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'image' => $imagePath,
            'user_id' => auth()->id(), // Assign the user_id of the authenticated user
        ]);
    
        // Redirect with a success message
        return redirect()->route('services.index')->with('success', 'Service added successfully.');
    }
    
    
    public function edit($id)
    {
        // Find the service by ID
        $service = Service::findOrFail($id);

        // Return the edit view with the service data
        return view('services.edit', compact('service'));
    }
   
   
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);
    
        $service = Service::findOrFail($id);
    
        $service->name = $request->input('name');
        $service->description = $request->input('description');
    
        if ($request->input('remove_image')) {
            if ($service->image && file_exists(public_path('service/' . $service->image))) {
                unlink(public_path('service/' . $service->image));
            }
            $service->image = null;
        } elseif ($request->hasFile('image')) {
            if ($service->image && file_exists(public_path('service/' . $service->image))) {
                unlink(public_path('service/' . $service->image));
            }
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('service'), $imageName);
            $service->image = $imageName;
        }
    
        $service->save();
    
        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }
    
    

    


    public function destroy($id)
    {
        // Find the service by its ID
        $service = Service::find($id);

        if (!$service) {
            // Return a 404 response if the service is not found
            return redirect()->route('services.index')->with('error', 'Service not found.');
        }

        // Delete the service
        $service->delete();

        // Redirect back to the services index with a success message
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
    
    
    
}
