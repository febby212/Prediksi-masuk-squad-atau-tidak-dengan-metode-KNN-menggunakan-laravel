<?php

namespace App\Http\Controllers;

use App\Models\Gelandang;
use App\Models\nilaiK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class knnGelandangController extends Controller
{
    function index()
    {
        if (Auth::check()) {
            return view('user.formTengah', [
                "title" => "Prediksi gelandang"
            ]);
        }

        return redirect("/login")->withSuccess('You are not allowed to access');
    }

    public function predict(Request $request)
    {
        // Ambil data test dari input form
        $testData = [
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
            'posisi' => $request->input('posisi'),
        ];

        // Ambil semua data pemain dari database
        $players = Gelandang::all();
        $nilai_k = nilaiK::where('id', 2)->value('nilai_k');

        // Hitung jarak antara pemain yang diinputkan dengan setiap pemain dalam database menggunakan algoritma KNN
        $k = $nilai_k; // Jumlah tetangga terdekat yang akan digunakan
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
        $nearestPlayers = Gelandang::whereIn('id', $nearestPlayerIds)->get();

        // Hitung jumlah pemain yang masuk squad dan tidak masuk squad pada k pemain terdekat
        $jumlahMasukSquad = $nearestPlayers->where('masuk_squad', 'YA')->count();
        $jumlahTidakMasukSquad = $nearestPlayers->where('masuk_squad', 'TIDAK')->count();

        // Hitung presentase pemain yang masuk squad
        $percentage = round(($jumlahMasukSquad / $k) * 100, 2);

        // Tentukan prediksi berdasarkan presentase
        $prediction = $percentage >= 50 ? 'YA' : 'TIDAK';

        $data = new Gelandang();
        $data->nama = $testData['nama'];
        $data->umur = $testData['umur'];
        $data->berat_badan = $testData['berat_badan'];
        $data->tinggi = $testData['tinggi'];
        $data->kaki_utama = $testData['kaki_utama'];
        $data->pace = $testData['pace'];
        $data->shooting = $testData['shooting'];
        $data->passing = $testData['passing'];
        $data->dribbling = $testData['dribbling'];
        $data->defending = $testData['defending'];
        $data->physical = $testData['physical'];
        $data->overall = $testData['overall'];
        $data->masuk_squad = $prediction;
        $data->save();

        // Tampilkan hasil prediksi dan pemain terdekat pada view
        return view('user.hasilKnn', ["title" => "Hasil Prediksi"], [
            'testData' => $testData,
            'nearestPlayers' => $nearestPlayers,
            'prediction' => $prediction,
            'percentage' => $percentage,
        ]);
    }
}
