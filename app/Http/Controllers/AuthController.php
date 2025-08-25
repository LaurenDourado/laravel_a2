<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister() { return view('register'); }

    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        return redirect()->route('home')->with('success','Cadastro realizado!');
    }

    public function showLogin(){ return view('login'); }

    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if($user && Hash::check($request->password, $user->password)){
            session(['user'=>$user]);
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email'=>'Credenciais inválidas']);
    }

    public function dashboard(){
        if(!session('user')) return redirect()->route('login');
        return view('dashboard');
    }

    public function showEditPassword(){
        if(!session('user')) return redirect()->route('login');
        return view('edit-password', ['user'=>session('user')]);
    }

    public function editPassword(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        $user = User::find(session('user')->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        session(['user'=>$user]);
        return redirect()->route('dashboard')->with('success','Dados atualizados!');
    }
}
