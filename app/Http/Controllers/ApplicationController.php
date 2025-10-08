<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function showForm()
    {
        return view('apply');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'class' => 'required|string',
        ]);

        Application::create($request->all());

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
