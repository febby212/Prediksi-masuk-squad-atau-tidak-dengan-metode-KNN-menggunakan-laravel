<?php

namespace App\Http\Controllers;

use App\Models\Bertahan;
use App\Models\Gelandang;
use App\Models\Gk;
use App\Models\Pemain;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class userController extends Controller
{
    function index()
    {
        return view('auth.login', [
            "title" => "Login"
        ]);
    }

    function regis()
    {
        return view('auth.regis', [
            "title" => "Register"
        ]);
    }

    function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();

            if (auth()->user()->role === 1) {
                // jika user superadmin
                return redirect()->intended('/dashboard');
            } else {
                // jika user pegawai
                return redirect()->intended('/home');
            }
        }

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'Email atau Password yang anda masukkan salah. Silahkan coba kembali');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    function user()
    {
        if (Auth::check()) {
            return view('user.index', [
                "title" => "Home"
            ]);
        }

        return redirect("/login")->with('errors', 'Silahkan Sign in terlebih dahulu.');
    }


    //admin dashboard
    function admin()
    {
        if (Auth::check()) {
            return view('admin.index', [
                "title" => "Dashboard"
            ]);
        }

        return redirect("/login")->with('errors','Silahkan Sign in terlebih dahulu.');
    }

    function cek()
    {
        if (auth()->user()->role === 1) {
            return redirect('/dashboard');
        } else {
            return redirect('/home');
        }
    }

    function daftar(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        // Menetapkan peran pengguna
        $role = Role::find($request->role);
        $user->role()->associate($role);
        $user->save();

        // Redirect ke halaman login setelah registrasi berhasil
        return redirect('/home');
    }

    function dataPemain()
    {
        $penyerang = Pemain::orderByDesc('id')->take(5)->get();
        $gelandang = Gelandang::orderByDesc('id')->take(5)->get();
        $bertahan = Bertahan::orderByDesc('id')->take(5)->get();
        $gk = Gk::orderByDesc('id')->take(5)->get();

        $att = Pemain::count();
        $mid = Gelandang::count();
        $def = Bertahan::count();
        $kiper = Gk::count();



        return view('admin.index', [
            "title" => "Dashboard",
            'penyerang' => $penyerang,
            'gelandang' => $gelandang,
            'bertahan' => $bertahan,
            'gk' => $gk,
            'att' => $att,
            'mid' => $mid,
            'def' => $def,
            'kiper' => $kiper
        ]);
    }
}
