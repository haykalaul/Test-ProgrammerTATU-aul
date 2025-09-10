<?php

namespace App\Http\Controllers;
use App\Http\Controllers\KabidController;
use App\Http\Controllers\KadinController;
use App\Http\Controllers\StaffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Suppport\Facades\Auth;
use Session;
use App\Models\User;
class EnterController extends Controller
{
    public function index()
    {
        return view('enter');
    }
    public function store(Request $request)
    {
        $rules = [
            'email' => 'required|email|unique:users,email',
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'role' => 'required|in:kepala_dinas,kepala_bidang,staff',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => $request->password,
            'role' => $request->role,
            'email_verified_at' => now(),
        ]);
        // Jika role adalah kepala_dinas, arahkan ke KadinController
    if ($request->role === 'kepala_dinas') {
            return redirect()->action([KadinController::class, 'index'])->with('success', 'Pengguna berhasil ditambahkan!');
    }
    if ($request->role === 'kepala_bidang') {
            return redirect()->action([KabidController::class, 'index'])->with('success', 'Pengguna berhasil ditambahkan!');
    }
    if ($request->role === 'staff') {
            return redirect()->action([StaffController::class, 'index'])->with('success', 'Pengguna berhasil ditambahkan!');
    }
}
}
