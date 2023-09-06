<?php

namespace App\Http\Controllers;

use App\Mail\VerificationCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (Auth::attempt($credentials)) {
            return redirect('/');
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
        $randomId = random_int(1000000000, 9999999999);
        $randomCode = random_int(100000, 999999);
        $registerId = User::select('register_id')->where('register_id', '1823499681')->first()->register_id ?? "empty";
        if($registerId !== "empty"){
            $randomId = random_int(1000000000, 9999999999);
        }

            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'verification_code' => $randomCode,
                'register_id' => $randomId,
                'updated_at' => null,
            ]);

        Mail::to($request->email)->send(new VerificationCode($randomCode, $randomId));


        return redirect('verification/' . $randomId);
    }

    public function verificationForm(String $id)
    {
        $email = User::select('email')->where('register_id', $id)->first();
        $data = [
            'register_id' =>  $email->email
        ];
        return view('auth/verification', $data);
    }

    public function verification(Request $request)
    {
        $request->validate([
            'codeVerification' => 'required'
        ]);

        $verCode = User::select('verification_code', 'register_id')->where('email', $request->emailVerification)->first();
        if ($request->codeVerification != $verCode->verification_code) {
            return Redirect::back()->with('error_message', "Kode verifikasi salah! masukkan kode verifikasi dengan benar yang sudah dikirim ke email anda.");
        }
        User::where('email', $request->emailVerification)->update([
            'updated_at' => date('Y-m-d H:i:s'),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'status' => 'verified'
        ]);

        return redirect('login')->with('message', "Kamu berhasil registrasi!");
    }
    public function otherVerification(Request $request)
    {
        $data = User::select('register_id', 'verification_code')->where('register_id', $request->route('id'))->first();
        if ($data->verification_code === $request->route('code') && $request->query('via_launch_code_email') === "true") {
            User::where('register_id', $request->route('id'))->update([
                'updated_at' => date('Y-m-d H:i:s'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'status' => 'verified'
            ]);
            return redirect('login')->with('message', "Kamu berhasil registrasi! Silahkan login untuk masuk");
        }else{
            return abort(404);
        }

    }
    public function passwordChanges(Request $request)
    {
        
    }

}
