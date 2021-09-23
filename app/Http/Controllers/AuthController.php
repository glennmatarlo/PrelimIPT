<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\SendSms;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Nexmo\Laravel\Facade\Nexmo;
use App\Notifications\AccountCreatedSMS;

class AuthController extends Controller
{
    public function registrationform(){
        return view('register');
    }
    public function loginForm(){
        return view('login');
    }
    public function home(){
        return view('home');
    }
    public function hm(){
        return view('landing');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);
        
        $token = Str::random(24);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
            'remember_token' => $token
        ]);

        Mail::send('verification-email', ['user'=>$user], function($mail) use ($user){
            $mail->to($user->email);
            $mail->subject('Account Verification');
            $mail->from('glennmatarlo21@gmail.com', 'GDMOTORS');
        });

        Nexmo::message()->send([
            'to'   => $user->phone,
            'from' => '16105552344',
            'text' => 'Please check your email for verification'
        ]);
        return redirect('/login')->with('Message', 'Your account has been created. Please check your email for verification.');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' => 'string|required',
        ]);

        $user=User::where('email', $request->email)->first();

        if(!$user || $user->email_verified_at==null){
            return redirect('/login')->with('Error', 'Sorry you are not yet verified.');
        }

        $login = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        if(!$login){
            return back()->with('Error', 'Invalid Credentials');
        }
        return redirect('/dashboard');
        
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    public function verification(User $user, $token){
        if($user->remember_token!==$token){
            return redirect('/login')->with('Error', 'The token is invalid.');
        }
        $user->email_verified_at = now();
        $user->save();

        return redirect('/login')->with('Message', 'Your Accout Has Been Verified. Please Log in.');
    }
}
