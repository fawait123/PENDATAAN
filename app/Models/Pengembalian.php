<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class Pengembalian extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'pengembalian';
    protected $primaryKey = 'kd_pengembalian';

    protected $guarded = [];
}
