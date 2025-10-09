<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Staff;

class StaffController extends Controller
{
    
    public function showLogin()
    {
        return view('staff.login');
    }

    
    public function login(Request $request)
    {
        $staff = Staff::where('username', $request->username)->first();

        if ($staff && Hash::check($request->password, $staff->password)) {
            session(['staff_id' => $staff->id]);
            return redirect()->route('staff.dashboard');
        }

        return back()->with('error', 'Invalid username or password');
    }

    // Show staff dashboard
    public function dashboard()
    {
        if (!session('staff_id')) {
            return redirect()->route('staff.login')->with('error', 'Please login first');
        }

        $staff = Staff::find(session('staff_id'));

        // later we can pass tasks, events, etc.
        return view('staff.dashboard', compact('staff'));
    }

    // Logout staff
    public function logout()
    {
        session()->forget('staff_id');
        return redirect()->route('staff.login');
    }
}
