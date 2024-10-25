<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use GuzzleHttp\Exception\RequestException;
use Exception;

class NewsletterController extends Controller
{
    /**
     * Subscribe a user to the newsletter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function subscribe(Request $request)
    {
       $request->validate([
        'email' => 'required|email',
       ]);

       try {
        // Check if the email is already subscribed
        if (Newsletter::isSubscribed($request->email)) {
            return redirect()->back()->with('error', 'You have already subscribed to our Newsletter');
        } else {
            // Subscribe the email
            Newsletter::subscribe($request->email);
            return redirect()->back()->with('success', 'You have successfully subscribed to our Newsletter');
        }
    } 
       
       catch (Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
}
}