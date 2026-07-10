<?php

namespace App\Models;

use App\Models\Model;

class ModelNaiveBayes extends Model
{
     protected $table = 'model_naive_bayes';

    protected $fillable = [
        'nama_model',
        'jumlah_dataset',
        'akurasi',
        'presisi',
        'recall',
        'f1_score',
        'lokasi_model',
        'status'
    ];

    protected $casts = [
        'akurasi' => 'float',
        'presisi' => 'float',
        'recall' => 'float',
        'f1_score' => 'float',
    ];

    public static function dashboard()
{
    return [
        'jumlah_dataset' => DatasetTraining::count(),
        'jumlah_kategori' => KategoriDokumen::count(),
        'model' => self::where('status','aktif')->first()
    ];
}
}
