<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class Ruang extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'ruang';
    protected $primaryKey = 'kd_ruang';

    protected $guarded = [];
}
