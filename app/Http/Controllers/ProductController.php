<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        return view('product/index');
    }
}