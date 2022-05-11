<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Penulis;
Use Alert;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis = penulis::all();
        return view('backend.penulis.index', compact('penulis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penulis = DB::table('penulis')->get();
        return view('backend.penulis.create', compact('penulis'));

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
            'nama' => 'required',
        ]);

        $penulis = new penulis;

        $penulis-> nama = $request->nama;
        $penulis->save();

        Alert::success('Create', 'Data Penulis Berhasil Ditambah');

        return redirect('/penulis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
         $penulis = penulis::findOrFail($id);
         return view('backend.penulis.show', compact('penulis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penulis = penulis::findOrFail($id);
        return view('backend.penulis.edit', compact('penulis'));
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
            'nama' => 'required',
        ]);

        $penulis = penulis::find($id);
        $penulis->nama = $request->nama;
        $penulis->update();

        Alert::success('Update', 'Data Penulis Berhasil Diubah');

        return redirect('/penulis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penulis = penulis::find($id);
        $penulis->delete();

        Alert::success('Delete', 'Data Penulis Berhasil Dihapus');

        return redirect('/penulis');

    }
}
