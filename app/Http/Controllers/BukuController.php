<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use DB;
use File;
Use Alert;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('backend.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penulis  = DB::table('penulis')->get();
        $kategori = DB::table('kategori')->get();
        return view('backend.buku.create', compact('penulis','kategori'));
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
            'judul'       => 'required',
            'edisi'       => 'required',
            'penerbit'    => 'required',
            'tahun'       => 'required',
            'cover'       => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'penulis_id'  => 'required',
            'kategori_id' => 'required'

        ]);

        $coverName = time().'.'.$request->cover->extension();  
   
        $request->cover->move(public_path('img/cover'), $coverName);

        $buku = new Buku;

        $buku->judul        = $request->judul;
        $buku->edisi        = $request->edisi;
        $buku->penerbit     = $request->penerbit;
        $buku->tahun        = $request->tahun;
        $buku->cover        = $coverName;
        $buku->penulis_id   = $request->penulis_id;
        $buku->kategori_id  = $request->kategori_id;

        $buku->save();

        Alert::success('Create', 'Data Buku Berhasil Ditambah');

        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('backend.buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penulis  = DB::table('penulis')->get();
        $kategori = DB::table('kategori')->get();
        $buku     = Buku::findOrFail($id);
        return view('backend.buku.edit', compact('buku','penulis','kategori'));
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
            'judul'       => 'required',
            'edisi'       => 'required',
            'penerbit'    => 'required',
            'tahun'       => 'required',
            'cover'       => 'image|mimes:jpg,png,jpeg|max:2048',
            'penulis_id'  => 'required',
            'kategori_id' => 'required'

        ]);
        

        if ($request->has('cover')) {
            $buku = Buku::find($id);
            
            $path = "img/cover/";
            File::delete($path . $buku->cover);

            $coverName = time().'.'.$request->cover->extension();  
   
            $request->cover->move(public_path('img/cover'), $coverName);

            $buku->judul        = $request->judul;
            $buku->edisi        = $request->edisi;
            $buku->penerbit     = $request->penerbit;
            $buku->tahun        = $request->tahun;
            $buku->cover        = $coverName;
            $buku->penulis_id   = $request->penulis_id;
            $buku->kategori_id  = $request->kategori_id;

            $buku->save();

            Alert::success('Update', 'Data Buku Berhasil Diubah');

            return redirect('/buku');
        } else {
            $buku = Buku::find($id);

            $buku->judul        = $request->judul;
            $buku->edisi        = $request->edisi;
            $buku->penerbit     = $request->penerbit;
            $buku->tahun        = $request->tahun;
            $buku->penulis_id   = $request->penulis_id;
            $buku->kategori_id  = $request->kategori_id;

            $buku->save();

            Alert::success('Update', 'Data Buku Berhasil Diubah');

            return redirect('/buku');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
            
        $path = "img/cover/";
        File::delete($path . $buku->cover);
        $buku->delete();

        Alert::success('Delete', 'Data Buku Berhasil Dihapus');

        return redirect('/buku');
    }
}
