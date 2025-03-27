<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Models\User;
use App\Services\EmailServices\SignUpMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function getSignUpForm() {
        return view('pages.signUp');
    }
    public function signUp(SignUpRequest $request) {
        $email = $request->get('email'); 
        $password = $request->get('password');
        $confirm_password = $request->get('confirmPassword');
        $fullname = $request->get('fullname');
        if ($password !== $confirm_password) {
            return redirect()->back()->with('message', 'Confirm password does not match the password.');
        }
        $userExists = User::where('email', $email)->exists();
        if ($userExists) {
            return redirect()->back()->with('message', 'Registration unsuccessful! Email already exists.');
        }
        $user = User::create([
            'email' => $email,
            'fullname' => $fullname,
            'password' => bcrypt($password)
        ]);
        if ($user) {
            Mail::to(users: $user->email)->send(new SignUpMail($user));
            return redirect('/login')->with('success', 'Account created successfully! Please check your email.');
        } 
        return redirect()->back()->with('message', 'Registration unsuccessful!.');
    }
    public function getLoginForm() {
        return view('pages.login');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
