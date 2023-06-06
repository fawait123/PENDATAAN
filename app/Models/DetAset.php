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


    public function ruang()
    {
        return $this->belongsTo(Ruang::class,'kd_ruang');
    }

    public function asal()
    {
        return $this->belongsTo(AsalAset::class,'kd_asal');
    }
}
