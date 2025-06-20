<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Guide;
use App\Models\Booking;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboardAdmin', [
            'destinationCount' => Destination::count(),
            'guideCount'       => Guide::count(),
            'bookingCount'     => Booking::count(),
        ]);
    }
}

