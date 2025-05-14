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
}
