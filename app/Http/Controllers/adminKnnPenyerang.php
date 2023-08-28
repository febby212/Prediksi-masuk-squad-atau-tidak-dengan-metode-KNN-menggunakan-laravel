<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;


class adminKnnPenyerang extends Controller
{
    function viewFormPenyerang() {
        return view('admin.prediksiPenyerang', [
            "title" => "Prediksi Admin Penyerang"
        ]);
    }

    function penyerangKnnAdmin(Request $request) {
        // Ambil data test dari input form
        $testData = [
            'nama' => $request->input('nama'),
            'kDekat' => $request->input('kDekat'),
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
            'posisi' => $request->input('posisi'),
        ];

        // Ambil semua data pemain dari database
        $players = Pemain::all();

        // Hitung jarak antara pemain yang diinputkan dengan setiap pemain dalam database menggunakan algoritma KNN
        $k = $testData['kDekat']; // Jumlah tetangga terdekat yang akan digunakan
        $distances = [];
        foreach ($players as $player) {
            $distance = sqrt(
                pow($player->umur - $testData['umur'], 2) +
                pow($player->berat_badan - $testData['berat_badan'], 2) +
                pow($player->tinggi - $testData['tinggi'], 2) +
                pow($player->kaki_utama - $testData['kaki_utama'], 2) +
                pow($player->pace - $testData['pace'], 2) +
                pow($player->shooting - $testData['shooting'], 2) +
                pow($player->passing - $testData['passing'], 2) +
                pow($player->dribbling - $testData['dribbling'], 2) +
                pow($player->defending - $testData['defending'], 2) +
                pow($player->physical - $testData['physical'], 2) +
                pow($player->overall - $testData['overall'], 2)
            );

            $distances[$player->id] = $distance;
        }

        // Urutkan jarak dari yang terkecil ke terbesar
        asort($distances);

        // Ambil k pemain terdekat
        $nearestPlayerIds = array_slice(array_keys($distances), 0, $k);
        $nearestPlayers = Pemain::whereIn('id', $nearestPlayerIds)->get();

        // Hitung jumlah pemain yang masuk squad dan tidak masuk squad pada k pemain terdekat
        $jumlahMasukSquad = $nearestPlayers->where('masuk_squad', 'YA')->count();

        // Hitung presentase pemain yang masuk squad
        $percentage = round(($jumlahMasukSquad / $k) * 100, 2);

        // Tentukan prediksi berdasarkan presentase
        $prediction = $percentage >= 50 ? 'YA' : 'TIDAK';

        // dd($testData, $nearestPlayers, $prediction, $percentage);

        return view('admin.hasilAdmin', ["title" => "Admin Hasil Prediksi"], [
            'testData' => $testData,
            'nearestPlayers' => $nearestPlayers,
            'prediction' => $prediction,
            'percentage' => $percentage,
        ]);
    }
}
