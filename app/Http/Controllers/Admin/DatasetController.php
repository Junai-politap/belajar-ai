<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\DatasetTrainingImport;
use App\Models\DatasetTraining;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DatasetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_dataset'] = DatasetTraining::all();

         $data['list_dataset'] = DatasetTraining::with('kategoridokumen')
        ->latest()
        ->paginate(10);
    
        return view('admin.dataset.index', $data);
    }

     public function import(Request $request)
    {
        $request->validate([
            'file'=>'required|mimes:xlsx,xls'
        ]);

        Excel::import(new DatasetTrainingImport(), $request->file('file'));

        return back()->with('success','Import berhasil.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dataset.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataset = New DatasetTraining();
        $dataset->id_kategori = request('id_kategori');
        $dataset->judul = request('judul');
        $dataset->isi_dokumen = request('isi_dokumen');
        $dataset->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
