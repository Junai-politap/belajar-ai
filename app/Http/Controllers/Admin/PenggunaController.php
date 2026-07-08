<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data['list_pengguna'] = Pengguna::all();
        return view('admin.pengguna.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengguna = New Pengguna();
        $pengguna->nama = $request->nama;
        $pengguna->email = $request->email;
        $pengguna->password = $request->password;
        $pengguna->no_hp = $request->no_hp;
        $pengguna->alamat = $request->alamat;
        $pengguna->handleUploadPoto();
        $pengguna->save();

        return redirect('admin/pengguna')->with('success', 'Data pengguna berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['pengguna'] = Pengguna::find($id);
        return view('admin.pengguna.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['pengguna'] = Pengguna::find($id);
        return view('admin.pengguna.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengguna = Pengguna::find($id);
        $pengguna->nama = $request->nama;
        $pengguna->email = $request->email;
        $pengguna->password = $request->password;
        $pengguna->no_hp = $request->no_hp;
        $pengguna->alamat = $request->alamat;
        $pengguna->handleUploadPoto();
        $pengguna->save();

        return redirect('admin/pengguna')->with('success', 'Data pengguna berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengguna = Pengguna::find($id);
        $pengguna->delete();

        return redirect('admin/pengguna')->with('success', 'Data pengguna berhasil dihapus.');
    }
}
