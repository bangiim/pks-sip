<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\Penulis;
use App\Kategori;

class FrontendController extends Controller
{   
    /**
     * Display page frontend.
     */
    public function index()
    {   
        $buku = Buku::all();
        $penulis = Penulis::all();
        return view('frontend.index', compact('buku','penulis'));
    }

    /**
     * Mencari judul buku sesuai keyword
     */
    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $buku = Buku::where('judul', 'like', "%" . $keyword . "%")->paginate(5);
        $penulis = Penulis::all();
        return view('frontend.hasilpencarian', compact('buku','penulis'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display detail nuku.
     */
    public function detail($id)
    {
        $buku = Buku::findOrFail($id);
        $penulis  = Penulis::all();
        $kategori = Kategori::all();
        return view('frontend.detailbuku', compact('buku','penulis','kategori'));
    }
}
