<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DatasetTraining;
use App\Models\KategoriDokumen;
use App\Models\ModelNaiveBayes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModelNaiveBayesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Model yang aktif
        $data['model'] = ModelNaiveBayes::where('status', 'Aktif')->first();

        // Riwayat training
        $data['riwayat'] = ModelNaiveBayes::latest()->get();

        // Statistik Dashboard
        $data['jumlahDataset'] = DatasetTraining::count();
        $data['jumlahKategori'] = KategoriDokumen::count();

        return view('admin.model-neive-bayes.index', $data);
    }

    public function mulaiTraining()
    {

        // Pastikan dataset ada
        $jumlahDataset = DatasetTraining::count();

        if ($jumlahDataset == 0) {

            return back()->with('danger', 'Dataset training masih kosong.');

        }

        // Nonaktifkan model sebelumnya
        ModelNaiveBayes::query()->update([
            'status' => 'Tidak Aktif'
        ]);

        // Nama file model
        $namaFile = 'model-naive-bayes-' . date('YmdHis') . '.json';

        // Simpan file dummy terlebih dahulu
        Storage::disk('local')->put(
            'model/' . $namaFile,
            json_encode([
                'jumlah_dataset' => $jumlahDataset,
                'tanggal_training' => now()
            ], JSON_PRETTY_PRINT)
        );

        // Simpan model baru
        $model = new ModelNaiveBayes();

        $model->nama_model = "Naive Bayes V1";

        $model->jumlah_dataset = $jumlahDataset;

        // Nilai dummy
        $model->akurasi = 0;

        $model->presisi = 0;

        $model->recall = 0;

        $model->f1_score = 0;

        $model->lokasi_model = "app/model/" . $namaFile;

        $model->status = "Aktif";

        $model->save();

        return back()->with('success', 'Training model berhasil.');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
