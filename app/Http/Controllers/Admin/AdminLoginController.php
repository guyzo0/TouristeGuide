<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\Admin;


class AdminLoginController extends Controller
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

   

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout.admin');
      
    }

    public function showLoginForm() 
    {
         return view('admin.login');
    }

    public function login(Request $request)
    {
        // validate form data
        $this->validate($request,
    [
        'email' => 'required|string|email',
        'password' => 'required|string|min:8'
    ]
    );

    //Attempt to login as admin
    if (Auth::guard('admin')->attempt([
        'email' => $request->email,
        'password' => $request->password],
        $request->remember
    )){
        //if successful then redirect to intended route or admin home
        return redirect()->intended(route('admin.home'));
        }

    //if unsuccessful then redirect back to login page with email and remember fields
    
        return redirect()->back()->withInput($request->only('email', 'remember'))->with('merror', 'Could not sign in with those details');
        
        
        }
        

    public function logout(Request $request)
    {
        $this->guard('admin')->logout();

        $request->session()->invalidate();
        
        return $this->loggedOut($request) ?: redirect('admin.login');
    }

    

    protected function guard()
    {
        return Auth::guard('admin');
    }


}