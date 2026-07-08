<?php

namespace App\Imports;

use App\Models\DatasetTraining;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatasetTrainingImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DatasetTraining([
            'id_kategori'      => $row['id_kategori'],
            'judul'     => $row['judul'],
            'isi_dokumen'     => $row['isi_dokumen'],
            
        ]);
    }
}
