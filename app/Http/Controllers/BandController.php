<?php

namespace App\Http\Controllers;

use App\Models\band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    public function index()
    {
        return view('band.index', [
            'band' => Band::litest()->get()
        ]);
    }

    public function create()
    {
        return view('band.create');
    }

    public function edit()
    {
        return view('band.edit');
    }
}
