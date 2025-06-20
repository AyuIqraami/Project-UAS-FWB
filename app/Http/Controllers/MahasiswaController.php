<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index($nama){
        $namaMahasiswa = $nama;
        return view('mahasiswa', compact('namaMahasiswa'));
    }
}
