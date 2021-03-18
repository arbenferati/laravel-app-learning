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

    public function UpdateApp(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:30',
            'short_description' => 'required|max:60',
            'body' => 'required',
        ],[
            'title.required' => 'Please, fill up the "Title" field !',
            'title.max' => 'Please, less then 30 chars !',
            'short_description.required' => 'Please, fill up the "Short description" field !',
            'short_description.max' => 'Please, less then 60 chars !',
            'body.required' => 'Please, fill up the "Description" field !',
        ]);

        $update = Application::find($id)->update([
          'title' => $request->title,
          'short_description' => $request->short_description,
          'body' => $request->body,
        ]);

        return Redirect()->route('app_management')->with('success', 'Category updated with success');
    }
}
