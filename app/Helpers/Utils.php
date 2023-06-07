<?php

namespace App\Helpers;

class Utils{

    public static function requestTrash()
    {
        return \App\Models\Penghapusan::with(['user','detail.detaset.aset'])->take(5)->get();
    }

    public static function card()
    {
        return [
            'totalAset'=>\App\Models\Aset::count(),
            'totalPeminjaman'=>\App\Models\Peminjaman::count(),
            'totalPengembalian'=>\App\Models\Pengembalian::count(),
            'asetLastUpdate'=>\App\Models\Aset::latest()->first()->updated_at->diffForHumans(),
            'peminjamanLastUpdate'=>\App\Models\Peminjaman::latest()->first()->updated_at->diffForHumans(),
            'pengembalianLastUpdate'=>\App\Models\Pengembalian::latest()->first()->updated_at->diffForHumans(),
        ];
    }
}
