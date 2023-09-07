<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        if (!Auth::check()) {
            return view('product/index');
        }
        $data = [
            'name' => Auth::user()->name
        ];
        return view('product/index', $data);
    }

    public function seblakMenu()
    {
        return view('product/menu');
    }
}
