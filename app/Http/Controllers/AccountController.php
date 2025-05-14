<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Dinas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $penggunas = Pengguna::all();
        $dinass = Dinas::all();
        return view('dinas.a_akun_terdaftar', compact('penggunas', 'dinass'));
    }

    public function storeDinas(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'penggunaname' => 'required|unique:dinass',
            'password' => 'required|min:6',
        ]);

        Dinas::create([
            'name' => $request->nama,
            'penggunaname' => $request->penggunaname,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Dinas account created successfully');
    }

    public function deletePengguna($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();
        return redirect()->back()->with('success', 'Pengguna deleted successfully');
    }

    public function deleteDinas($id)
    {
        $dinas = Dinas::findOrFail($id);
        $dinas->delete();
        return redirect()->back()->with('success', 'Dinas deleted successfully');
    }
}