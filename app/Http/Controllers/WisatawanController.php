<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WisatawanController extends Controller
{
    public function index()
    {
        return view('Wisatawan.dashboardWisatawan');
    }

    public function dashboard()
    {
        return view('Wisatawan.dashboardWisatawan', [
            'jumlahDestinasi' => Destination::count(),
            'jumlahBooking' => Booking::where('user_id', Auth::id())->count(),

            // Menampilkan hanya guide yang sudah terhubung ke destinasi melalui relasi many to many
            'jumlahGuide' => User::where('role', 'guide')
                                ->whereHas('guide.destinations') // relasi melalui model Guide
                                ->count(),

            'destinations' => Destination::all()
        ]);
    }
}
