<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormInspeksiController extends Controller
{
    public function formulir()
    {
        return view('form-inspeksi');
    }
    public function store()
    {
        return request()->all();
    }
}
