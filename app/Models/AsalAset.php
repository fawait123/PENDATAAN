<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class AsalAset extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'asal_aset';
    protected $primaryKey = 'kd_asal';

    protected $guarded = [];
}
