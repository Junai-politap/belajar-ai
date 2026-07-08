<?php


namespace App\Models;

use App\Models\Model;
use Illuminate\Support\Str;

class KategoriDokumen extends Model
{
    protected $table='kategori_dokumen';

    public function DataSetTraining()
    {
        return $this->belongsTo(DatasetTraining::class, 'id');
    }
}
