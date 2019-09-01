<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Hadiah;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $aggota = Anggota::get();
        return view('anggota', ['anggota' => $aggota]);
    }
}
