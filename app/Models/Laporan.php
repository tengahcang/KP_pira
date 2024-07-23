<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $fillable = ['id_status', 'id_pelanggan', 'no_pelanggan', 'masalah', 'solusi'];
    public function status()
    {
        return $this->belongsTo(Status::class, 'id_status');
    }
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }
}
