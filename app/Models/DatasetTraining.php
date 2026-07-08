<?php

namespace App\Models;

use App\Models\Model;

class DatasetTraining extends Model
{
    protected $table ="dataset_training";

     protected $fillable = [
        'id_kategori',
        'judul',
        'isi_dokumen',
        
    ];

    public function KategoriDokumen()
    {
        return $this->belongsTo(KategoriDokumen::class, 'id_kategori');
    }
}
