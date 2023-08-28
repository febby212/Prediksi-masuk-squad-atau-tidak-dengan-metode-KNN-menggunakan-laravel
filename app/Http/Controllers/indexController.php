<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    function awal() {
        return view('user.index', [
            "title" => "Home"]);
    }

    function about() {
        return view('user.about', [
            "title" => "Tentang"
        ]);
    }

    function penggunaan() {
        return view('user.petunjuk',[
            "title" => "Petunjuk"]);
    }

    function pengembang() {
        return view('user.team',[
            "title" => "Pengembang"]);
    }
}
