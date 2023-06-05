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
}
