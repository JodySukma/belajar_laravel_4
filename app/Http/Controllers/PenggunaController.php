<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function index()
    {
        // mengambil data pengguna
        $pengguna = Pengguna::all();

        // return data ke view
        return view('pengguna', ['pengguna' => $pengguna]);
    }
}
