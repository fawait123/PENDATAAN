<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class DetPeminjaman extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'det_peminjaman';
    protected $primaryKey = 'kd_det_peminjaman';

    protected $guarded = [];
}
