@extends('layouts.app')

@section('title', 'password-changes')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-5 m-5 bg-light border border-secondary-subtle rounded">
            <h1 class="text-center m-3">Ubah Password</h1>
            @if(session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
            @endif
            <form action="{{ url('password-changes') }}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password Lama</label>
                    <input type="password" name="old_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                @if($errors->has('old_password'))
                <span class="text-danger">{{ $errors->first('old_password') }}</span>
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password Baru</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                @if($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Konfirmasi Password Baru</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary my-5 col-12">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection