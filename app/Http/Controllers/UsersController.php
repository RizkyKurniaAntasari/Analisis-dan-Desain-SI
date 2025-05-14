<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Artikel method
    public function artikel()
    {
        return view('users.artikel');
    }

    // <=============================== [ P E N G U M U M A N] ===============================>
    public function pengumuman()
    {
        return view('users.pengumuman');
    }
    // <=============================== [ P E N Y U L U H A N] ===============================>
    public function penyuluhan()
    {
        return view('users.penyuluhan');
    }
}
