<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subsidi;
use Illuminate\Support\Facades\Auth;

class SubsidiController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $subsidi = Subsidi::all();
            return view('pengajuan_subsidi', compact('subsidi'));
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'nik' => 'required|string|size:16',
            'jenis_subsidi' => 'required|string',
        ]);

        // Cek jika jenis subsidi adalah 'pupuk'
        if ($request->jenis_subsidi === 'pupuk') {
            $request->validate([
                'jenis_pupuk' => 'required',  // Memastikan jenis_pupuk terisi
                'volume_pupuk' => 'required|numeric',  // Memastikan volume_pupuk terisi
            ]);

            // Masukkan data jenis_pupuk dan volume_pupuk jika ada
            $validated['jenis_pupuk'] = $request->jenis_pupuk;
            $validated['volume_pupuk'] = $request->volume_pupuk;
        } else {
            // Jika bukan 'pupuk', beri nilai default untuk jenis_pupuk dan volume_pupuk
            $validated['jenis_pupuk'] = 'Tidak Ada';  // Default jika bukan pupuk
            $validated['volume_pupuk'] = 0;  // Volume default jika bukan pupuk
        }

        // Simpan data ke database
        Subsidi::create($validated);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Pengajuan subsidi berhasil dikirim!');
    }
}
