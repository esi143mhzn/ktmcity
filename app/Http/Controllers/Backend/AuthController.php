<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class AuthController extends Controller
{
    private $_notifyMessage = null;
    private $_notifyType = 'info';

    public function getLogin() {
        return view('backend.auth.login');
    }

    public function postLogin(Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('food');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function getLogout() {
        try {
            Auth::logout();
            $this->_notifyMessage = "Logged Out";
        } catch (Exception $e) {
            $this->_notifyMessage = "Logout Failed. Please Try Again.";
            $this->_notifyType = "danger";
        }

        return redirect()->route('backend.auth.login');

    }
}
