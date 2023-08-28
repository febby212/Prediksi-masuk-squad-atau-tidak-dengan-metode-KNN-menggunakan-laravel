<?php

namespace App\Http\Controllers;

use App\Models\Bertahan;
use App\Models\Gelandang;
use App\Models\Gk;
use App\Models\Pemain;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class adminController extends Controller
{
    function data()
    {

        $penyerang = Pemain::inRandomOrder()->get();
        $gelandang = Gelandang::inRandomOrder()->get();
        $bertahan = Bertahan::inRandomOrder()->get();
        $gk = Gk::inRandomOrder()->get();


        return view('admin.data', [
            "title" => "Data Pemain",
            'penyerang' => $penyerang,
            'gelandang' => $gelandang,
            'bertahan' => $bertahan,
            'gk' => $gk
        ]);
    }

    function tambah() {
        return view('admin.tambahPenyerang', [
            "title" => "Tambah Data" 
        ]);
    }

    function tambahPenyerang(Request $request)
    {
        $ambilData = [
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'berat_badan' => $request->input('berat_badan'),
            'tinggi' => $request->input('tinggi'),
            'kaki_utama' => $request->input('kaki_utama'),
            'pace' => $request->input('pace'),
            'shooting' => $request->input('shooting'),
            'passing' => $request->input('passing'),
            'dribbling' => $request->input('dribbling'),
            'defending' => $request->input('defending'),
            'physical' => $request->input('physical'),
            'overall' => $request->input('overall'),
            'masuk_squad' => $request->input('masuk_squad'),
        ];

        $data = new Pemain();
        $data->nama = $ambilData['nama'];
        $data->umur = $ambilData['umur'];
        $data->berat_badan = $ambilData['berat_badan'];
        $data->tinggi = $ambilData['tinggi'];
        $data->kaki_utama = $ambilData['kaki_utama'];
        $data->pace = $ambilData['pace'];
        $data->shooting = $ambilData['shooting'];
        $data->passing = $ambilData['passing'];
        $data->dribbling = $ambilData['dribbling'];
        $data->defending = $ambilData['defending'];
        $data->physical = $ambilData['physical'];
        $data->overall = $ambilData['overall'];
        $data->masuk_squad = $ambilData['masuk_squad'];
        $data->save();

        
        return redirect()->back()->with('success', 'Data Pemain berhasil ditambahkan <strong>dengan sukses!</strong>');
    }

    function viewGelandang() {
        return view('admin.tambahGelandang', [
            "title" => "Tambah Data" 
        ]);
    }

    function tambahGelandang(Request $request) {
        $dataGelandang = [
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'berat_badan' => $request->input('berat_badan'),
            'tinggi' => $request->input('tinggi'),
            'kaki_utama' => $request->input('kaki_utama'),
            'pace' => $request->input('pace'),
            'shooting' => $request->input('shooting'),
            'passing' => $request->input('passing'),
            'dribbling' => $request->input('dribbling'),
            'defending' => $request->input('defending'),
            'physical' => $request->input('physical'),
            'overall' => $request->input('overall'),
            'masuk_squad' => $request->input('masuk_squad'),
        ];

        $data = new Gelandang();
        $data->nama = $dataGelandang['nama'];
        $data->umur = $dataGelandang['umur'];
        $data->berat_badan = $dataGelandang['berat_badan'];
        $data->tinggi = $dataGelandang['tinggi'];
        $data->kaki_utama = $dataGelandang['kaki_utama'];
        $data->pace = $dataGelandang['pace'];
        $data->shooting = $dataGelandang['shooting'];
        $data->passing = $dataGelandang['passing'];
        $data->dribbling = $dataGelandang['dribbling'];
        $data->defending = $dataGelandang['defending'];
        $data->physical = $dataGelandang['physical'];
        $data->overall = $dataGelandang['overall'];
        $data->masuk_squad = $dataGelandang['masuk_squad'];
        $data->save();


        return redirect()->back()->with('success', 'Data Pemain berhasil ditambahkan <strong>dengan sukses!</strong>');
    }

    function viewBertahan() {
        return view('admin.tambahBertahan', [
            "title" => "Tambah Data" 
        ]);
    }

    function tambahBertahan(Request $request) {
        $dataBertahan = [
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'berat_badan' => $request->input('berat_badan'),
            'tinggi' => $request->input('tinggi'),
            'kaki_utama' => $request->input('kaki_utama'),
            'pace' => $request->input('pace'),
            'shooting' => $request->input('shooting'),
            'passing' => $request->input('passing'),
            'dribbling' => $request->input('dribbling'),
            'defending' => $request->input('defending'),
            'physical' => $request->input('physical'),
            'overall' => $request->input('overall'),
            'masuk_squad' => $request->input('masuk_squad'),
        ];

        $data = new Bertahan();
        $data->nama = $dataBertahan['nama'];
        $data->umur = $dataBertahan['umur'];
        $data->berat_badan = $dataBertahan['berat_badan'];
        $data->tinggi = $dataBertahan['tinggi'];
        $data->kaki_utama = $dataBertahan['kaki_utama'];
        $data->pace = $dataBertahan['pace'];
        $data->shooting = $dataBertahan['shooting'];
        $data->passing = $dataBertahan['passing'];
        $data->dribbling = $dataBertahan['dribbling'];
        $data->defending = $dataBertahan['defending'];
        $data->physical = $dataBertahan['physical'];
        $data->overall = $dataBertahan['overall'];
        $data->masuk_squad = $dataBertahan['masuk_squad'];
        $data->save();
        
        
        return redirect()->back()->with('success', 'Data Pemain berhasil ditambahkan <strong>dengan sukses!</strong>');
    }

    function viewGk() {
        return view('admin.tambahGk', [
            "title" => "Tambah Data" 
        ]);
    }

    function tambahGk(Request $request) {
        $dataGk = [
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'berat_badan' => $request->input('berat_badan'),
            'tinggi' => $request->input('tinggi'),
            'kaki_utama' => $request->input('kaki_utama'),
            'diving' => $request->input('diving'),
            'handling' => $request->input('handling'),
            'kicking' => $request->input('kicking'),
            'reflexes' => $request->input('reflexes'),
            'speed' => $request->input('speed'),
            'positioning' => $request->input('positioning'),
            'overall' => $request->input('overall'),
            'masuk_squad' => $request->input('masuk_squad'),
        ];

        $data = new Gk();
        $data->nama = $dataGk['nama'];
        $data->umur = $dataGk['umur'];
        $data->berat_badan = $dataGk['berat_badan'];
        $data->tinggi = $dataGk['tinggi'];
        $data->kaki_utama = $dataGk['kaki_utama'];
        $data->diving = $dataGk['diving'];
        $data->handling = $dataGk['handling'];
        $data->kicking = $dataGk['kicking'];
        $data->reflexes = $dataGk['reflexes'];
        $data->speed = $dataGk['speed'];
        $data->positioning = $dataGk['positioning'];
        $data->overall = $dataGk['overall'];
        $data->masuk_squad = $dataGk['masuk_squad'];
        $data->save();

        
        return redirect()->back()->with('success', 'Data Pemain berhasil ditambahkan <strong>dengan sukses!</strong>');
    }
}
