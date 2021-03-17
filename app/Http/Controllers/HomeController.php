<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class HomeController extends Controller
{
    public function ShowHome()
    {
        $applications = Application::all();
        return view('welcome', compact('applications'));
    }
}
