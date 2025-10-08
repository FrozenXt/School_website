<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === '26AA1001' && $password === 'AAschool@2026') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.home');
        }

        return back()->with('error', 'Invalid username or password');
    }

    public function home()
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');

        $total = Application::count();
        $newThisWeek = Application::where('created_at', '>=', now()->subWeek())->count();

        return view('admin.home', compact('total', 'newThisWeek'));
    }

    public function dashboard()
    {
        if (!session('admin_logged_in')) return redirect()->route('admin.login');

        $applications = Application::latest()->get();
        return view('admin.dashboard', compact('applications'));
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }
    public function delete($id)
{
    if (!session('admin_logged_in')) return response()->json(['success' => false]);

    $application = \App\Models\Application::find($id);
    if ($application) {
        $application->delete();
        return response()->json(['success' => true]);
    }
    return response()->json(['success' => false]);
}

}
?>