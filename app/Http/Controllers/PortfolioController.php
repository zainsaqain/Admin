<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use App\Models\Category;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('portfolios.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Create a new portfolio entry
        $portfolio = new Portfolio();
        $portfolio->title = $request->input('title');
        $portfolio->short_description = $request->input('short_description');
        $portfolio->description = $request->input('description');
    
        // Handle image upload if present
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('portfolio_images'), $imageName);
            $portfolio->image = 'portfolio_images/' . $imageName; // Save the relative path
        }
    
        // Assign user_id
        $portfolio->user_id = auth()->id(); // Set the user_id to the currently authenticated user's ID
    
        $portfolio->save(); // Save the portfolio
    
        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully.');
    }
    

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048', // Validation for additional images
        ]);
    
        // Find the portfolio item by ID
        $portfolio = Portfolio::findOrFail($id);
    
        // Update the portfolio fields
        $portfolio->title = $request->input('title');
        $portfolio->short_description = $request->input('short_description');
        $portfolio->description = $request->input('description');
    
        // Handle the image upload if a new main image is provided
        if ($request->hasFile('image')) {
            if ($portfolio->image) {
                $oldImagePath = public_path($portfolio->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            // Store the new main image directly in the public directory
            $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('portfolio_images'), $imageName);
            $portfolio->image = 'portfolio_images/' . $imageName; // Save the relative path
        }
    
        // Handle additional images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $additionalImageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('portfolio_images'), $additionalImageName);
    
                // Store the additional image in the database
                PortfolioImage::create([
                    'portfolio_id' => $portfolio->id,
                    'image' => 'portfolio_images/' . $additionalImageName, // Save path for the additional image
                ]);
            }
        }
    
        // Save the updated portfolio item
        $portfolio->save();
    
        // Redirect with success message
        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully!');
    }
    
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        
        // Optionally delete the associated images here
        if ($portfolio->image) {
            $oldImagePath = public_path($portfolio->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Delete additional images if needed
        PortfolioImage::where('portfolio_id', $portfolio->id)->delete();

        $portfolio->delete();
    
        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully!');
    }
}
