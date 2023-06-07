<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class Pengembalian extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'pengembalian';
    protected $primaryKey = 'kd_pengembalian';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class,'kd_peminjaman');
    }

    public function detail()
    {
        return $this->hasOne(DetPengembalian::class,'kd_pengembalian');
    }
}
