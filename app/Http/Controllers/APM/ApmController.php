<?php

namespace App\Http\Controllers\APM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApmController extends Controller
{
    public function index()
    {
        return view('layouts.apm.index');
    }
}
