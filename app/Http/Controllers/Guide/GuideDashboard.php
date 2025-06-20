<?php

namespace App\Http\Controllers\Guide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuideDashboard extends Controller
{
    public function index()
    {
        return view('Guide.dashboardGuide');
    }
}
