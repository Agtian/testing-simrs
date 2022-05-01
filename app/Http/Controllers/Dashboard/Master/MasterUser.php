<?php

namespace App\Http\Controllers\Dashboard\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterUser extends Controller
{
    public function index()
    {
        return view('layouts.dashboard.master.user.index', [
            'title_1'   => 'Master',
            'title_2'   => 'Data User',
            'active'    => 'active',
        ]);
    }
}
