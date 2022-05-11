<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
Use Alert;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::all();
        return view('backend.anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.anggota.create');
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
            'nama'         => 'required',
            'jeniskelamin' => 'required',
            'tanggallahir' => 'required',
            'alamat'       => 'required',
            'email'        => 'required',
            'telp'         => 'required'

        ]);

        $anggota = new Anggota;

        $anggota->nama         = $request->nama;
        $anggota->jeniskelamin = $request->jeniskelamin;
        $anggota->tanggallahir = $request->tanggallahir;
        $anggota->alamat       = $request->alamat;
        $anggota->email        = $request->email;
        $anggota->telp         = $request->telp;

        $anggota->save();

        Alert::success('Create', 'Data Anggota Berhasil Ditambah');

        return redirect('/anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('backend.anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota     = Anggota::findOrFail($id);
        return view('backend.anggota.edit', compact('anggota'));
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
            'nama'         => 'required',
            'jeniskelamin' => 'required',
            'tanggallahir' => 'required',
            'alamat'       => 'required',
            'email'        => 'required',
            'telp'         => 'required'

        ]);

        $anggota = Anggota::find($id);

        $anggota->nama         = $request->nama;
        $anggota->jeniskelamin = $request->jeniskelamin;
        $anggota->tanggallahir = $request->tanggallahir;
        $anggota->alamat       = $request->alamat;
        $anggota->email        = $request->email;
        $anggota->telp         = $request->telp;

        $anggota->save();

        Alert::success('Update', 'Data Anggota Berhasil Diubah');

        return redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $anggota = Anggota::find($id);
        $anggota->delete();

        Alert::success('Delete', 'Data Anggota Berhasil Dihapus');

        return redirect('/anggota');
    }
}
