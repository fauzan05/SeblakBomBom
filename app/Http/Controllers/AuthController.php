<?php

namespace App\Http\Controllers;

use App\Mail\VerificationCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth/login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        } else {
            return redirect('login')->with('error_message', 'Username or Password is Wrong');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    public function registerForm()
    {
        return view('auth/register');
    }
    public function register(Request $request)
    {
                $request->validate(
                    [
                        'name' => 'required',
                        'email' => 'required|email|unique:users',
                        'password' => 'required|min:6|confirmed'
                    ]
                );
                $randomId = random_int(100000000, 999999999);
                $randomCode = random_int(100000, 999999);
                User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password')),
                    'verification_code' => $randomCode,
                    'verification_id' => $randomId,
                    'updated_at' => null,
                ]);

                Mail::to($request->email)->send(new VerificationCode($randomCode));

                return redirect('verification/' . $randomId);  
    }

    public function verificationForm(String $id)
    {
        $email = User::select('email')->where('verification_id', $id)->first();
        $data = [
            'verification_id' =>  $email->email
        ];
        return view('auth/verification', $data);
    }

    public function verification(Request $request)
    {
        $request->validate([
            'codeVerification' => 'required'
        ]);
        
        $verCode = User::select('verification_code')->where('email', $request->emailVerification)->first();
        if($request->codeVerification != $verCode->verification_code){
            return redirect('verification')->with('email', $request->emailVerification);
        }
        User::where('email', $request->emailVerification)->update([
            'updated_at' => date('Y-m-d H:i:s'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'status' => 'verified'
        ]);
        
        return redirect('login')->with('message', "Kamu berhasil registrasi!");
    }
}
