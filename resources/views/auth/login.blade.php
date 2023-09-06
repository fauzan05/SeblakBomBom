@extends('layouts.app')

@section('title', 'Login')


@section('content')
<div class="container m-5">
    <div class="row justify-content-center align-items-center" style="height: 70vh;">
        <div class="col-lg-5">
            <h1 class="text-center">Login Page</h1>
            @if(session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
            @elseif(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            <form method="post" action="{{ url('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                @if($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <button type="submit" class="btn btn-primary mt-5" style="width: 100%;">Masuk</button>
            </form>
            <div class="col-lg-10 text-center m-5">
                <p>Belum punya akun?</p>
                <a href="{{ url('register') }}">Registrasi Sekarang</a>
            </div>
        </div>
    </div>
    @endsection