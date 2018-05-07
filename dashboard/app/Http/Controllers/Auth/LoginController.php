<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

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
    // public function getLogin() {
    //     return view('login');
    // }
    // public function postLogin(Request $request) {
    //     $rules = [
    //         'email' =>'required|email',
            
    //     ];
    //     $messages = [
    //         'email.required' => 'Email is required',
    //         'email.email' => 'Email incorrect',
    //         'password.required' => 'password is required',
            
    //     ];
    //     $validator = Validator::make($request->all(), $rules, $messages);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     } else {
    //         $email = $request->input('email');
    //         $password = $request->input('password');
    //          $remember = $request->input('remember_me');

    //         if( Auth::attempt(['email' => $email, 'password' =>$password], $remember)) {
    //             return redirect()->intended('/home');
    //         } else {
    //             $errors = new MessageBag(['errorlogin' => 'Email or password incorrect']);
    //             return redirect()->back()->withInput()->withErrors($errors);
    //         }
    //     }
    // }









    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    // protected function credentials(Request $request)
    // {
    //     $field = filter_var($request->get($this->name()), FILTER_VALIDATE_EMAIL)
    //         ? $this->name()
    //         : 'username';

    //     return [
    //         $field => $request->get($this->name()),
    //         'password' => $request->password,
    //     ];
    // }
}