<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    protected $table = 'respon';
    protected $fillable =[
        'id_laporan', 'isi_respon', 'tanggal_respon'
    ];

    public function respon()
    {
        return $this->belongsTo(Respon::class, 'id_laporan');
    }

}
