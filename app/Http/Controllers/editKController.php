<?php

namespace App\Http\Controllers;

use App\Models\nilaiK;
use Illuminate\Http\Request;

class editKController extends Controller
{
    public function viewK()
    {

        $nilaiK = nilaiK::all();

        return view('admin.updateK', [
            "title" => "Update Nilai K",
            'nilaiK' => $nilaiK
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nilai_k' => 'required|numeric' // Ubah validasi sesuai kebutuhan Anda
        ]);

        $nilai = nilaiK::find($id);
        if (!$nilai) {
            return redirect()->back()->with('error', 'Data nilai K tidak ditemukan.');
        }

        $nilai->nilai_k = $request->nilai_k;
        $nilai->save();

        return redirect()->back()->with('success', 'Nilai K berhasil diperbarui.');
    }
}
