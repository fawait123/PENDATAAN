<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class DetPenghapusan extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'det_penghapusan';
    protected $primaryKey = 'kd_det_penghapusan';

    protected $guarded = [];

    public function detaset()
    {
        return $this->belongsTo(DetAset::class,'kd_det_aset');
    }
}
