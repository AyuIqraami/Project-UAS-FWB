<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Destination;
use App\Models\Guide;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        
    }

public function create(Destination $destination)
{
    $destinations = Destination::all();
    $guides = $destination->guides;

    return view('Wisatawan.bookingCreate', compact('destination', 'guides', 'destinations'));
}

    public function store(Request $request)
{
    $request->validate([
        'destination_id' => 'required|exists:destinations,id',
        'guide_id' => 'required|exists:guides,id',
        'booking_date' => 'required|date|after_or_equal:today',
    ]);

    Booking::create([
        'user_id' => Auth::id(),
        'guide_id' => $request->guide_id,
        'booking_date' => $request->booking_date,
        'status' => 'pending'
    ]);

    return redirect()->route('wisatawan.bookings')->with('success', 'Booking berhasil dikirim. Tunggu konfirmasi dari guide.');
}

    public function show(booking $booking)
    {
        
    }

    public function edit(booking $booking)
    {
        
    }

    public function update(Request $request, booking $booking)
    {
        
    }

    public function destroy(booking $booking)
    {
        
    }
}
