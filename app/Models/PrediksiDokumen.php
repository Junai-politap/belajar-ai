<?php

namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PrediksiDokumen extends Model
{
    protected $table = 'prediksi_dokumen';


    public function handleUploadFile()
    {
        if (request()->hasFile('nama_file')) {

            // Hapus file lama
            if ($this->lokasi_file) {

                $oldFile = str_replace('app/', '', $this->lokasi_file);

                if (Storage::exists($oldFile)) {
                    Storage::delete($oldFile);
                }
            }

            $file = request()->file('nama_file');

            $destination = "prediksi-dokumen";

            $randomStr = Str::random(5);

            $filename = time() . "-" . $randomStr . "." . $file->extension();

            $path = $file->storeAs($destination, $filename);

            $this->nama_file = $filename;

            $this->lokasi_file = "app/" . $path;
        }
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }

    /**
     * Relasi ke Kategori Dokumen
     */
    public function kategori()
    {
        return $this->belongsTo(KategoriDokumen::class, 'id_kategori_dokumen');
    }

    /**
     * Relasi ke Model Naive Bayes
     */
    public function modelNaiveBayes()
    {
        return $this->belongsTo(ModelNaiveBayes::class, 'id_model_naive_bayes');
    }
}