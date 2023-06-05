<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class DetMutasi extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'det_mutasi';
    protected $primaryKey = 'kd_det_mutasi';

    protected $guarded = [];
}
