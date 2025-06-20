<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
{
    $user = $request->user();
    $profile = $user->profile;

    return view('profile.edit', compact('user', 'profile'));
}

    /**
     * Update the user's profile information.
     */
 public function update(ProfileUpdateRequest $request): RedirectResponse
{
    $user = $request->user();

    // Update data di tabel users
    $user->fill($request->only('name', 'email'));

    if ($user->isDirty('email')) {
        $user->email_verified_at = null;
    }

    $user->save();

    // Update atau buat profile
    $profile = $user->profile ?? new Profile(['user_id' => $user->id]);

    $profile->phone = $request->input('phone');
    $profile->address = $request->input('address');

    if ($request->hasFile('photo')) {
        if ($profile->photo && Storage::exists($profile->photo)) {
            Storage::delete($profile->photo);
        }

        $profile->photo = $request->file('photo')->store('profile_photos', 'public');
    }

    $profile->save();

    $user = $user->fresh();

switch ($user->role) {
    case 'Admin':
        return redirect()->route('dashboard.admin')->with('status', 'profile-updated');
    case 'Guide':
        return redirect()->route('dashboard.guide')->with('status', 'profile-updated');
    case 'Wisatawan':
    default:
        return redirect()->route('dashboard.wisatawan')->with('status', 'profile-updated');
}

}


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
