<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class Mutasi extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'mutasi';
    protected $primaryKey = 'kd_mutasi';

    protected $guarded = [];
}
