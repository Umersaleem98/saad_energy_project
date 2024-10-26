<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Service;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $services = Service::all();
        return view('welcome', compact('services', 'teams'));
    }
   
    public function about_us()
    {
        $teams = Team::all();
        return view('aboutus', compact('teams'));
    }
    public function contact_us()
    {
        return view('contactus');
    }

    public function submit(Request $request)
{
    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|string|max:20',
        'project' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Create a new contact form entry
    ContactForm::create($request->all());

    // Redirect or return a response
    return back()->with('success', 'Your message was submitted successfully!');
}


    public function oursuppliers()
    {
        return view('oursupplier');
    }

    public function ourservices()
    {
        $services = Service::all();
        return view('outservices', compact('services'));
    }
    public function ourpartners()
    {
        return view('ourpartner');
    }
    
    public function energysolution()
    {
        return view('energysolutions');
    }
    public function businessinsurancesolution()
    {
        return view('businessinsurancesolutions');
    }
    public function businesstelecomandbroadband()
    {
        return view('businesstelecomandbroadbands');
    }
    public function businessfinance()
    {
        return view('businessfinances');
    }
    public function businessmerchantssolution()
    {
        return view('businessmerchantssolutions');
    }
}
