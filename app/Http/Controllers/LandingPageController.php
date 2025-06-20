<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Review;
use App\Models\Guide;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
   public function landing()
{
    $destinations = Destination::all();
    $reviews = Review::with('user')->latest()->take(5)->get();
    $guides = Guide::with('user')->latest()->take(5)->get(); // Ambil 5 guide terakhir

    return view('welcome', compact('destinations', 'reviews', 'guides'));
}
}
