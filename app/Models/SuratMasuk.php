<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'tb_surat_masuk';

    protected $fillable = [
        'surat_masuk_id',
        'prajuru_banjar_adat_id',
        'perihal',
        'asal_surat',
        'tanggal_surat',
        'tanggal_diterima',
        'tanggal_diteruskan',
        'tanggal_kegiatan',
        'waktu_kegiatan',
        'detail_master_surat_id',
        'file',
        'desa_adat_id'
    ];
}
