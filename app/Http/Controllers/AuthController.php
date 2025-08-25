<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin() { return view('login'); }

    public function login(Request $request) {
        $request->validate(['email' => 'required|email', 'password' => 'required']);
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            session(['user' => $user]);
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'Credenciais inválidas']);
    }

    public function showRegister() { return view('register'); }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Cadastro realizado! Faça login.');
    }

    public function dashboard() {
        // rota já é protegida por middleware; apenas por segurança:
        $user = session('user');
        if (!$user) return redirect()->route('login');
        return view('dashboard', compact('user'));
    }

    public function logout() {
        session()->forget('user');
        return redirect()->route('home');
    }

    // ===== Esqueceu a senha (sem login) =====
    public function showEditPassword() {
        // NÃO passa $user para a view — a view não deve usar $user
        return view('edit-password');
    }

    public function editPassword(Request $request) {
        $request->validate([
            'email'    => 'required|email|exists:users,email',
            'name'     => 'required',
            'password' => 'required|min:6'
        ], [
            'email.exists' => 'Email não encontrado.'
        ]);

        $user = User::where('email', $request->email)->first();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->save();

        // Atualiza sessão se for o mesmo usuário (opcional)
        if (session('user') && session('user')->id === $user->id) {
            session(['user' => $user]);
        }

        return redirect()->route('login')->with('success', 'Senha atualizada! Faça login novamente.');
    }
}
