<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
   
    public function about_us()
    {
        return view('aboutus');
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
        return view('outservices');
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
