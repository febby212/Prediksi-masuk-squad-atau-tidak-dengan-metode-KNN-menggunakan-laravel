<?php

namespace App\Http\Controllers;

use App\Models\Gk;
use App\Models\Pemain;
use Illuminate\Http\Request;

class dataController extends Controller
{
    // function kriteria() {
    //     return view('user.kriteria', [
    //         "title" => "Kriteria Data"
    //     ]);
    // }

    function dataPemain() {
        $pemain = Pemain::whereBetween('id', [14,17])->get();
        $gk = Gk::whereBetween('id', [5, 8])->get();

        

        return view('user.kriteria', [
            "title" => "Kriteria Data",
            'pemain' => $pemain,
            'gk' => $gk,
        ]);
    }
}
