<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'E-Voting | Login'
        ]);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'password.required' => 'Password harus diisi.'
        ]);

        $user = User::where('email', $validatedData['email'])->first();

        if ($user && Hash::check($validatedData['password'], $user->password)) {
            Auth::login($user);

            $request->session()->put('userRole', $user->role);

            if ($user->role === 'admin') {
                return redirect()->route('dashboard.index');
            } elseif ($user->role === 'voter') {
                return redirect()->route('voter.index');
            } else {
                Auth::logout();
                return back()->withErrors(['Peran pengguna tidak valid.'])->withInput(['email' => $user->email]);
            }
        }

        return back()->withErrors(['Periksa kembali email dan password yang anda masukkan.'])->withInput($request->only('email'));
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->flush();

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
