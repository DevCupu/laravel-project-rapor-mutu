<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanduanController extends Controller
{
    public function index()
    {
        return view('panduan-pbd.index'); // Pastikan file view ini juga ada
    }
}
