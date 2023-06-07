<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    protected $redirectTo = RouteServiceProvider::HOME;

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('username', 'password'))) {
            return $this->sendLoginResponse($request);
        }

        return redirect()->route('loginForm')->withErrors(['username' => trans('auth.failed')])->withInput();
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        return $this->authenticated($request, Auth::user())
            ?: redirect()->intended($this->redirectPath());
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->back()
            ->withInput($request->only('username'))
            ->withErrors([
                'username' => trans('auth.failed'),
            ]);
    }

    protected function authenticated(Request $request, $user)
    {
        $userData = User::find($user->id);

        if ($userData->role === 'admin') {
            return redirect()->route('admin.dashboard')->with('user', $userData);
        } elseif ($userData->role === 'mechanic') {
            return redirect()->route('mechanic.dashboard')->with('user', $userData);
        } elseif ($userData->role === 'master_mechanic') {
            return redirect()->route('mmechanic.dashboard')->with('user', $userData);
        } elseif ($userData->role === 'dealer') {
            return redirect()->route('dealer.dashboard')->with('user', $userData);
        } elseif ($userData->role === 'customer') {
            return redirect()->route('customer.dashboard')->with('user', $userData);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('loginForm');
    }
}
