<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UsesUuid;

class Peminjam extends Model
{
    use HasFactory,UsesUuid;

    protected $table = 'peminjam';
    protected $primaryKey = 'id_peminjam';

    protected $guarded = [];
}
