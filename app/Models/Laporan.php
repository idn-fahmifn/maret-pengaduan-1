<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    // nama tabel 
    protected $table = 'laporan';

    protected $fillable = [
        'id_user', 'judul_laporan', 'tanggal_laporan', 'detail_laporan', 'dokumentasi', 'status'
    ];

    protected $casts = ['tanggal_laporan' => 'datetime'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}
