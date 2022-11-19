<?php

namespace App\Http\Controllers;

use App\Models\BasisPengetahuan;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BasisPengehtahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basis = BasisPengetahuan::all();
        return view('admin.basispengetahuan', compact('basis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahbasispengetahuan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $basis = new BasisPengetahuan();
        $basis->judul = $request->judul;
        $basis->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '-' . $request->judul . '.' . $extension;
            $basis->path_gambar = $file->move('images/basispengetahuan/', $filename);
        }
        $basis->save();

        return redirect('/admin/basispengetahuan')->with('success', 'Basis Pengetahuan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $basis = BasisPengetahuan::find($id);
        return view('admin.editbasispengetahuan', compact('basis'));
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
        $basis = BasisPengetahuan::find($id);
        $basis->judul = $request->judul;
        $basis->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
            File::delete($basis->path_gambar);
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '-' . $request->judul . '.' . $extension;
            $basis->path_gambar = $file->move('images/basispengetahuan/', $filename);
        }
        $basis->save();

        return redirect('/admin/basispengetahuan')->with('success', 'Basis Pengetahuan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $basis = BasisPengetahuan::find($id);
        //delete file
        $file = $basis->path_gambar;
        if (File::exists($file)) {
            //hapus gambar
            File::delete($file);
        }
        $basis->delete();

        return redirect('/admin/basispengetahuan')->with('success', 'Basis Pengetahuan berhasil dihapus');
    }
}
