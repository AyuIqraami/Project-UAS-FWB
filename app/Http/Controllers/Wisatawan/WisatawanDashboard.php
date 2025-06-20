<?php

namespace App\Http\Controllers\Wisatawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WisatawanDashboard extends Controller
{
    public function index()
    {
        return view('Wisatawan.dashboardWisatawan');
    }
    
}
