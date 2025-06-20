<?php

namespace App\Http\Controllers\Wisatawan;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function create(User $guide)
    {
        // Ambil destinasi yang dipandu oleh guide
        $destinations = $guide->destinations ?? [];

        return view('wisatawan.booking.create', compact('guide', 'destinations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'guide_id' => 'required|exists:users,id',
            'destination_id' => 'required|exists:destinations,id',
            'booking_date' => 'required|date',
        ]);

        DB::transaction(function () use ($request) {
            Booking::create([
                // 'wisatawan_id' => auth()->id(),
                'guide_id' => $request->guide_id,
                'destination_id' => $request->destination_id,
                'booking_date' => $request->booking_date,
                'status' => 'pending',
            ]);
        });

        return redirect()->route('wisatawan.bookings.index')->with('success', 'Booking berhasil dibuat!');
    }
}

