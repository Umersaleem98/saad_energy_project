<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function message_list()
    {
        $messages = ContactForm::all();

        return view('admins.message', compact('messages'));
    }
}
