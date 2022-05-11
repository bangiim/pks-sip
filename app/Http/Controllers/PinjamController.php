<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjam;
use DB;
use Alert;

class PinjamController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjam = pinjam::all();
        return view('backend.pinjam.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $pinjam = DB::table('pinjam')->get();
        $anggota  = DB::table('anggota')->get();
        $buku = DB::table('buku')->get();
        return view('backend.pinjam.create', compact('pinjam', 'anggota', 'buku'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_pinjam'       => 'required',
            'tanggal_jatuhtempo'   => 'required',
            'tanggal_pengembalian' => '',
            'anggota_id'           => 'required',
            'buku_id'              => 'required'
            
        ]);

        $pinjam = new pinjam;

        $pinjam->tanggal_pinjam        = $request->tanggal_pinjam;
        $pinjam->tanggal_jatuhtempo    = $request->tanggal_jatuhtempo;
        $pinjam->tanggal_pengembalian  = $request->tanggal_pengembalian;
        $pinjam->anggota_id            = $request->anggota_id;
        $pinjam->buku_id               = $request->buku_id; 
        
        $pinjam->save();

        Alert::success('Create', 'Data Peminjaman Berhasil Ditambah');

        return redirect('/pinjam');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $pinjam = pinjam::findOrFail($id);
        return view('backend.pinjam.show', compact('pinjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota  = DB::table('anggota')->get();
        $buku = DB::table('buku')->get();
        $pinjam    = pinjam::findOrFail($id); 
        return view('backend.pinjam.edit', compact('pinjam','anggota','buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_pinjam'         => 'required',
            'tanggal_jatuhtempo'     => 'required',
            'tanggal_pengembalian'   => '',
            'anggota_id'             => 'required',
            'buku_id'                => 'required'
        ]);

        
        $pinjam = pinjam::find($id);
        $pinjam->tanggal_pinjam        = $request->tanggal_pinjam;
        $pinjam->tanggal_jatuhtempo    = $request->tanggal_jatuhtempo;
        $pinjam->tanggal_pengembalian  = $request->tanggal_pengembalian;
        $pinjam->anggota_id            = $request->anggota_id;
        $pinjam->buku_id               = $request->buku_id;

        $pinjam->update();

        Alert::success('Update', 'Data Peminjaman Berhasil Diubah');

        return redirect('/pinjam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pinjam = pinjam::find($id);
        $pinjam->delete();

        Alert::success('Delete', 'Data Peminjaman Berhasil Dihapus');

        return redirect('/pinjam');    
    }
}
