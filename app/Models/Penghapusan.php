<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class Penghapusan extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'penghapusan';
    protected $primaryKey = 'kd_penghapusan';

    protected $guarded = [];
}
