<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/student';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function  login(Request $request): \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('email', 'password'))) {
            return $this->authenticated($request, Auth::user()) ?: redirect()->intended('/');
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }

    protected function authenticated(Request $request, $user): \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        // Redirect based on the user’s role

        if ($user->roles === 'super') {

            return redirect()->route('super-dashboard');

        } elseif ($user->roles === 'admin') {

            return redirect()->route('admin-dashboard');
        }
        elseif ($user->roles === 'student') {

            return redirect()->route('student-dashboard');
        }

        // Default redirect if no roles match
        return redirect('/');
    }
}
