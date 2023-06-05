<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class DetAset extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'det_aset';
    protected $primaryKey = 'kd_det_aset';

    protected $guarded = [];
}
