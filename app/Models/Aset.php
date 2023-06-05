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
}
