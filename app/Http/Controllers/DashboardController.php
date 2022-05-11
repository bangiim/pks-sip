<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Anggota;
use App\User;
use App\Pinjam;

class DashboardController extends Controller
{
    public function index()
    {   
        $buku = Buku::count();
        $anggota = Anggota::count();
        $user = User::count();
        $pinjam = Pinjam::count();
        return view('backend.dashboard.index', compact('buku','anggota','user','pinjam'));
    }
}
