@extends('layouts.app')

@section('title', 'Register')


@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: auto;">
        <div class="col-lg-5">
            <h1 class="text-center mt-5">Halaman Registrasi</h1>
            @if(session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
            @endif
            <form method="post" action="{{ url('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                </div>
                @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <div class="mb-3">
                    <label for="exampleInputPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword">
                </div>
                @if($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <div class="mb-5">
                    <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Registrasi Sekarang</button>
            </form>
            <div class="col-lg-10 text-center m-5">
                <p>Sudah punya akun?</p>
                <a href="{{ url('login') }}">Login Sekarang</a>
            </div>
        </div>
    </div>
    @endsection