<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public Auth $auth;

    public function index()
    {
        if (!Auth::check()) {
            return view('product/index');
        }
        $user = $this->auth->user();
        return view('product/index', $user);
    }
}
