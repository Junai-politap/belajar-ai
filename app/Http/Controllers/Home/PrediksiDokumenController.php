<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\DatasetTraining;
use App\Models\KategoriDokumen;
use App\Models\ModelNaiveBayes;
use App\Models\PrediksiDokumen;
use Illuminate\Http\Request;

class PrediksiDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['jumlahDataset'] = DatasetTraining::count();
        $data['jumlahKategori'] = KategoriDokumen::count();

        $data['model'] = ModelNaiveBayes::where('status', 'aktif')->first();

            
        return view('home.riwayat-prediksi.index', $data);
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
        $request->validate([
            'nama_file' => 'required|mimes:pdf,doc,docx|max:10240',
        ]);

        // Ambil model yang sedang aktif
        $model = ModelNaiveBayes::where('status', 'Aktif')->first();

        if (!$model) {

            return redirect()->back()
                ->with('danger', 'Model Naive Bayes belum tersedia.');
        }

        // Simpan data
        $prediksi = new PrediksiDokumen();

        $prediksi->id_pengguna = auth()->guard('pengguna')->user()->id;

        $prediksi->id_model_naive_bayes = $model->id;

        // Upload file
        

        

        $prediksi->id_kategori_dokumen = 'a231df6c-1d0a-4e5e-ad0f-df274779384c';

        $prediksi->confidence = 96.45;
        $prediksi->handleUploadFile();
       
        $prediksi->save();

        return redirect('pengguna/riwayat-prediksi')->with('success', 'Dokumen berhasil diprediksi.');
        
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
