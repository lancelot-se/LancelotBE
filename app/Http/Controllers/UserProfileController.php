<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('editprofile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'password' => 'required|string|min:6' // Tambahkan validasi untuk password
        ]);

        // Temukan pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Verifikasi kata sandi
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'Kata sandi salah.']);
        }

        // Update profil pengguna
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address
        ]);

        return redirect()->route('user.edit', ['id' => $user->id])->with('success', 'Profil berhasil diperbarui.');
    }
}
