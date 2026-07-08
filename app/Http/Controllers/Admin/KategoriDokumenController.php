<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriDokumen;
use Illuminate\Http\Request;

class KategoriDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_kategori_dokumen'] = KategoriDokumen::all();

        return view('admin.kategori-dokumen.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori-dokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = New KategoriDokumen();
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->deskripsi = request('deskripsi');
        $kategori->save();

        return redirect('admin/kategori-dokumen');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['kategori_dokumen'] = KategoriDokumen::find($id);

        return view('admin.kategori-dokumen.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $data['kategori_dokumen'] = KategoriDokumen::find($id);

        return view('admin.kategori-dokumen.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = KategoriDokumen::find($id);
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->deskripsi = request('deskripsi');
        $kategori->save();

        return redirect('admin/kategori-dokumen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = KategoriDokumen::find($id);
        $kategori->delete();

        return redirect('admin/kategori-dokumen')->with('success', 'Data Kategori berhasil dihapus.');
    }
}
