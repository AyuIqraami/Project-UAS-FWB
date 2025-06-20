<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Destination;
use App\Models\Guide;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
public function create(Destination $destination)
{
    // Ambil semua destinasi (buat partial daftarWisata)
    $destinations = Destination::all();

    // Ambil semua guide yang terkait dengan destinasi ini
    $guides = $destination->guides;

    return view('Wisatawan.bookingCreate', compact('destination', 'guides', 'destinations'));
}

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        //
    }
}
