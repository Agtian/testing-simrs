<?php

namespace App\Http\Controllers\Dashboard\RawatJalan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Rekap extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.rawat-jalan.rekap.index');
    }
}
