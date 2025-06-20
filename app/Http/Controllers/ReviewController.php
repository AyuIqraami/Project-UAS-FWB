<?php

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index() {
        $reviews = Review::with('guide', 'user')->get();
        return view('admin.review.index', compact('reviews'));
    }

    public function destroy($id) {
        Review::destroy($id);
        return redirect()->route('admin.review.index')->with('success', 'Review dihapus.');
    }
}
