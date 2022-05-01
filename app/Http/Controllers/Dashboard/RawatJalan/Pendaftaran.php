<?php

namespace App\Http\Controllers\Dashboard\RawatJalan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pendaftaran extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.rawat-jalan.pendaftaran.index', [
            'title_1'   => 'Rawat Jalan',
            'title_2'   => 'Pendaftaran',
            'active'    => 'active',
        ]);
    }
}
