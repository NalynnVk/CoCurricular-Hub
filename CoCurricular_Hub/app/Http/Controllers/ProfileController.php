<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile'); // Assuming you name your blade file module.blade.php
    }

    public function showProfile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

}
