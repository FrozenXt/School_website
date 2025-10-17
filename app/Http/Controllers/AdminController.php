<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin; 
use App\Models\Application;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Show login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Fetch admin by username
        $admin = Admin::where('username', $request->username)->first();

        // Check credentials
        if ($admin && Hash::check($request->password, $admin->password)) {
            session([
            'admin_logged_in' => true,
            'admin_id'        => $admin->id,
            'admin_role'      => strtolower(trim($admin->role)), // 'superadmin' or 'subadmin'
            'admin_username'  => $admin->username,
]);


            return redirect()->route('admin.home');
        }

        // Invalid credentials
        return back()->withErrors(['Invalid username or password']);
    }

    // Admin home page
    public function home()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $total = Application::count();
        $newThisWeek = Application::where('created_at', '>=', now()->subWeek())->count();

        return view('admin.home', compact('total', 'newThisWeek'));
    }

    // Dashboard showing all applications
    public function dashboard()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $applications = Application::latest()->get();
        return view('admin.dashboard', compact('applications'));
    }

    // Delete application
    public function delete($id)
    {
        if (!session('admin_logged_in')) {
            return response()->json(['success' => false, 'message' => 'Unauthorized']);
        }

        // Only superadmin can delete
        if (session('admin_role') !== 'superadmin') {
            return response()->json(['success' => false, 'message' => 'Access denied']);
        }

        $application = Application::find($id);

        if ($application) {
            $application->delete();
            return response()->json(['success' => true, 'message' => 'Application deleted']);
        }

        return response()->json(['success' => false, 'message' => 'Application not found']);
    }

    // Logout
    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_id', 'admin_role', 'admin_username']);
        return redirect()->route('admin.login');
    }
}
