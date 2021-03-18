<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function ManageApps()
    {
        $apps = Application::latest()->paginate(100);
        return view('pages.manage-apps', compact('apps'));
    }

    public function EditApp($id)
    {
        $app = Application::find($id);
        return view ('pages.application.edit-app', compact('app'));
    }
}
