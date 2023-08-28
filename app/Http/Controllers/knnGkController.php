<?php

namespace App\Http\Controllers;

use App\Models\Gk;
use App\Models\nilaiK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class knnGkController extends Controller
{
    function index()
    {
        if (Auth::check()) {
            return view('user.formGk', [
                "title" => "Prediksi Kiper"
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
            'diving' => $request->input('diving'),
            'handling' => $request->input('handling'),
            'kicking' => $request->input('kicking'),
            'reflexes' => $request->input('reflexes'),
            'speed' => $request->input('speed'),
            'positioning' => $request->input('positioning'),
            'overall' => $request->input('overall'),
            'posisi' => $request->input('posisi'),
        ];


        // Ambil semua data pemain dari database
        $players = Gk::all();
        $nilai_k = nilaiK::where('id', 4)->value('nilai_k');

        // Hitung jarak antara pemain yang diinputkan dengan setiap pemain dalam database menggunakan algoritma KNN
        $k = $nilai_k; // Jumlah tetangga terdekat yang akan digunakan
        $distances = [];
        foreach ($players as $player) {
            $distance = sqrt(
                pow($player->umur - $testData['umur'], 2) +
                pow($player->berat_badan - $testData['berat_badan'], 2) +
                pow($player->tinggi - $testData['tinggi'], 2) +
                pow($player->kaki_utama - $testData['kaki_utama'], 2) +
                pow($player->diving - $testData['diving'], 2) +
                pow($player->handling - $testData['handling'], 2) +
                pow($player->kicking - $testData['kicking'], 2) +
                pow($player->reflexes - $testData['reflexes'], 2) +
                pow($player->speed - $testData['speed'], 2) +
                pow($player->positioning - $testData['positioning'], 2) +
                pow($player->overall - $testData['overall'], 2)
            );

            $distances[$player->id] = $distance;
        }

        // Urutkan jarak dari yang terkecil ke terbesar
        asort($distances);

        // Ambil k pemain terdekat
        $nearestPlayerIds = array_slice(array_keys($distances), 0, $k);
        $nearestPlayers = Gk::whereIn('id', $nearestPlayerIds)->get();

        // Hitung jumlah pemain yang masuk squad dan tidak masuk squad pada k pemain terdekat
        $jumlahMasukSquad = $nearestPlayers->where('masuk_squad', 'YA')->count();

        // Hitung presentase pemain yang masuk squad
        $percentage = round(($jumlahMasukSquad / $k) * 100, 2);

        // Tentukan prediksi berdasarkan presentase
        $prediction = $percentage >= 50 ? 'YA' : 'TIDAK';

        $data = new Gk();
        $data->nama = $testData['nama'];
        $data->umur = $testData['umur'];
        $data->berat_badan = $testData['berat_badan'];
        $data->tinggi = $testData['tinggi'];
        $data->kaki_utama = $testData['kaki_utama'];
        $data->diving = $testData['diving'];
        $data->handling = $testData['handling'];
        $data->kicking = $testData['kicking'];
        $data->reflexes = $testData['reflexes'];
        $data->speed = $testData['speed'];
        $data->positioning = $testData['positioning'];
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
