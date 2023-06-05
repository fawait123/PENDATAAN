<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class JenisAset extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'jenis_aset';
    protected $primaryKey = 'kd_jenis';

    protected $guarded = [];
}
