<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class Aset extends Model
{
    use HasFactory,UsesUuid;


    protected $table = 'aset';
    protected $primaryKey = 'kd_aset';

    protected $guarded = [];


    public function detail()
    {
        return $this->hasOne(DetAset::class,'kd_aset');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }

    public function jenis()
    {
        return $this->belongsTo(JenisAset::class,'kd_jenis');
    }
}
