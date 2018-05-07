<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


//add
// use Illuminate\Http\Request;

// use App\Http\Requests;
// use Validator;
// use Auth;
// use Illuminate\Support\MessageBag;
// //end add
// class LoginController extends Controller
// {

//     public function getLogin() {
//         return view('login');
//     }
//     public function postLogin(Request $request) {
//         $rules = [
//             'email' =>'required|email',
//             'password' => 'required|min:8'
//         ];
//         $messages = [
//             'email.required' => 'Email is required',
//             'email.email' => 'Email incorrect',
//             'password.required' => 'password is required',
//             'password.min' => 'password minimum 8 char',
//         ];
//         $validator = Validator::make($request->all(), $rules, $messages);

//         if ($validator->fails()) {
//             return redirect()->back()->withErrors($validator)->withInput();
//         } else {
//             $email = $request->input('email');
//             $password = $request->input('password');

//             if( Auth::attempt(['email' => $email, 'password' =>$password])) {
//                 return redirect()->intended('/');
//             } else {
//                 $errors = new MessageBag(['errorlogin' => 'Email or password incorrect']);
//                 return redirect()->back()->withInput()->withErrors($errors);
//             }
//         }
//     }
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

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     */ //@return void
     
    //public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
