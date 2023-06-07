<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class Peminjaman extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'peminjaman';
    protected $primaryKey = 'kd_peminjaman';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function peminjam()
    {
        return $this->belongsTo(Peminjam::class,'id_peminjam');
    }

    public function detail()
    {
        return $this->hasOne(DetPeminjaman::class,'kd_peminjaman');
    }
}
