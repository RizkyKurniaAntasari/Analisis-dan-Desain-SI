<?php
namespace App\Http\Controllers;
use App\Models\Petugas;
use App\Models\DataPengaduan;
use App\Models\KontenStaticPetugas;
use App\Models\Subsidi;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    // Menampilkan semua data petugas
    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas.index', compact('petugas'));
    }

    // Menampilkan form tambah petugas
    public function create()
    {
        return view('petugas.create');
    }

    // Menyimpan petugas baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:petugas',
            'password' => 'required|min:6',
        ]);

        Petugas::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('petugas.p_dashboard')->with('success', 'Petugas berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('petugas.edit', compact('petugas'));
    }

    // Update data petugas
    public function update(Request $request, $id)
    {
        $petugas = Petugas::findOrFail($id);

        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:petugas,email,' . $id,
        ]);

        $petugas->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('petugas.p_dashboard')->with('success', 'Data petugas diperbarui.');
    }

    // Hapus petugas
    public function destroy($id)
    {
        $petugas = Petugas::findOrFail($id);
        $petugas->delete();

        return redirect()->route('petugas.p_dashboard')->with('success', 'Petugas berhasil dihapus.');
    }

    // ==================== AUTHENTICATION ====================
    public function showLoginForm()
    {
        return view('petugas.p_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('petugas')->attempt($credentials)) {
            return redirect()->intended(route('petugas.p_dashboard'))
                ->withSuccess('Anda berhasil login sebagai petugas');
        }

        return redirect(route('petugas.p_login'))->withError('Email atau password salah');
    }

    public function logout()
    {
        Auth::guard('petugas')->logout();
        return redirect(route('petugas.p_login'));
    }

    // ==================== DASHBOARD & PAGES ====================
    public function dashboard()
    {
        if (!Auth::guard('petugas')->check()) {
            return redirect(route('petugas.p_login'));
        }
        return view('petugas.p_dashboard');
    }

    public function datadinas()
    {
        return view('petugas.p_datadinas');
    }

    public function pengaduan()
    {
        $data_pengaduan = DataPengaduan::all();
        return view('petugas.p_pengaduan', compact('data_pengaduan'));
    }

    public function subsidi()
    {
        $subsidi = Subsidi::all();
        return view('petugas.p_subsidi', compact('subsidi'));
    }

    public function pengaturan()
    {
        return view('petugas.p_pengaturan');
    }

    public function informasiPertanian()
    {
        $artikels = Artikel::latest()->get(); // Ambil semua artikel, terbaru duluan
        return view('petugas.p_informasiPertanian', compact('artikels'));
    }

    public function updateHarga()
    {
        return view('petugas.p_updateHarga');
    }

/*
|--------------------------------------------------------------------------
| PETUGAS - P DATA DINAS - TENTANG PROFILE  (Sejarah,Visi,Tugas,Struktur);
|--------------------------------------------------------------------------
*/

    public function menulis(Request $request)
    {
        $tipe = $request->tipe;
        $konten = KontenStaticPetugas::where('tipe', $tipe)->first();

        return response()->json([
            'konten' => $konten?->konten ?? ''
        ]);
    }

    public function memperbarui(Request $request)
    {
        $request->validate([
            'tipe' => 'required|string',
            'konten' => 'nullable|string'
        ]);

        KontenStaticPetugas::updateOrCreate(
            ['tipe' => $request->tipe],
            ['konten' => $request->konten]
        );

        return response()->json([
            'success' => true,
            'message' => 'Konten berhasil diperbarui.'
        ]);
    }



}