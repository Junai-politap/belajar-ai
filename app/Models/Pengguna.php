<?php

namespace App\Models;


use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;

class Pengguna extends ModelAuthenticate
{

	protected $table = "pengguna";

	 function handleUploadPoto()
    {
        if (request()->hasFile('poto')) {
            $poto = request()->file('poto');
            $destination = "pengguna";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $poto->extension();
            $url = $poto->storeAs($destination, $filename);
            $this->poto = "app/" . $url;


        }
    }

}