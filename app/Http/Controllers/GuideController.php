<?php

namespace App\Http\Controllers;

use App\Models\guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        return view('Guide.dashboard'); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(guide $guide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(guide $guide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, guide $guide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(guide $guide)
    {
        //
    }
}
