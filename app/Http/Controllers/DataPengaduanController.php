<?php

namespace App\Http\Controllers;

use App\Models\DataPengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DataPengaduanController extends Controller
{
    public function pengaduan()
    {
        if (Auth::check()) {
            $data_pengaduan = DataPengaduan::all();
            return view('pengaduan', compact('data_pengaduan'));
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }


     public function simpan(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'required|string',
            'isi_pesan' => 'required|string',
            
        ]);

        DataPengaduan::create($validated);

        return redirect('pengaduan')->with('success', 'Data berhasil disimpan!');
    }
}
