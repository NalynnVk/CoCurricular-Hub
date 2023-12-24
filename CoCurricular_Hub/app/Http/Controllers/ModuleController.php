<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    // In ModuleController.php
    public function index()
    {
        return view('module'); // Assuming you name your blade file module.blade.php
    }
}
