<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with(['user', 'guide'])->get();
        return view('admin.review.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.review.create');
    }

    public function store(Request $request)
    {
        Review::create($request->all());
        return redirect()->route('admin.review.index')->with('success', 'Review berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.review.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        $review->update($request->all());
        return redirect()->route('admin.review.index')->with('success', 'Review berhasil diupdate.');
    }

    public function destroy($id)
    {
        Review::destroy($id);
        return redirect()->route('admin.review.index')->with('success', 'Review berhasil dihapus.');
    }
}
