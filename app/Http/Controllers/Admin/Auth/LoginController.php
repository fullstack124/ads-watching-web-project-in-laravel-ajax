<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $admin = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]);
        if ($admin) {
            return redirect(route('admin.dashboard'));
        } else {
            return redirect(route('admin.auth.login'));
        }
    }
}
