<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;

// class GuideController extends Controller
// {
//     public function index()
//     {
//         $guides = User::where('role', 'Guide')->get();
//         return view('admin.guide.index', compact('guides'));
//     }

//     public function create()
//     {
//         return view('admin.guide.create');
//     }

//     public function store(Request $request)
//     {
//         User::create($request->all());
//         return redirect()->route('admin.guide.index')->with('success', 'Guide berhasil ditambahkan.');
//     }

//     public function edit($id)
//     {
//         $guide = User::findOrFail($id);
//         return view('admin.guide.edit', compact('guide'));
//     }

//     public function update(Request $request, $id)
//     {
//         $guide = User::findOrFail($id);
//         $guide->update($request->all());
//         return redirect()->route('admin.guide.index')->with('success', 'Guide berhasil diupdate.');
//     }

//     public function destroy($id)
//     {
//         User::destroy($id);
//         return redirect()->route('admin.guide.index')->with('success', 'Guide berhasil dihapus.');
//     }
// }

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index() {
        $guides = Guide::with('user')->get();
        return view('admin.guide.index', compact('guides'));
    }

    public function destroy($id) {
        Guide::destroy($id);
        return redirect()->route('admin.guide.index')->with('success', 'Guide dihapus.');
    }
}
