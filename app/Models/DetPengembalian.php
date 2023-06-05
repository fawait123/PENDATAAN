<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class DetPengembalian extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'det_pengembalian';
    protected $primaryKey = 'kd_det_pengembalian';

    protected $guarded = [];
}
