<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects');  // Retorna la vista projects/index.blade.php
    }
}
