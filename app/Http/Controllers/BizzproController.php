<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // Add this for auth
use Illuminate\Http\Request;

class BizzproController extends Controller
{
    public function index()
    {
        // Retrieve services created by the logged-in user
        $services = Service::where('user_id', Auth::id())->get();
    
        // Return the 'bizzpro' view with the user's services data
        return view('bizzpro', compact('services'));
    }

    public function portfolio()
    {
        // Retrieve portfolios created by the logged-in user
        $portfolios = Portfolio::where('user_id', Auth::id())->get();

        // Return the 'bizzpro.portfolios' view with the user's portfolios data
        return view('bizzpro.portfolios', compact('portfolios'));
    }

    public function teams()
    {
        // Retrieve teams created by the logged-in user
        $teams = Team::where('user_id', Auth::id())->get();

        // Return the 'bizzpro.teams' view with the user's teams data
        return view('bizzpro.teams', compact('teams'));
    }

    public function contact()
    {
        return view('bizzpro.contact');
    }

    public function about()
{
    $users = User::all(); // Get all registered users
    return view('bizzpro.about', compact('users'));
}

}
