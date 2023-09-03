@extends('layouts.app')

@section('title', 'Verification')


@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 70vh;">
        <div class="col-lg-5">
            <h1 class="text-center">Verification Code Page</h1>
            @if(session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
            @endif
            <form method="post" action="{{ url('verification') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masukkan kode verifikasi yang dikirimkan ke email : {{ $verification_id }}</label>
                    <input type="hidden" name="emailVerification" value=" {{ $verification_id }}">
                    <input type="text" name="codeVerification" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Verifikasi</button>
            </form>
        </div>
    </div>
    @endsection