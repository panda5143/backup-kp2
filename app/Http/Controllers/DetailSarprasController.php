<?php

namespace App\Http\Controllers;

use App\Models\DetailSarpras;
use Illuminate\Http\Request;

class DetailSarprasController extends Controller
{
    public function showByType($sarpras_id, $jenis_ruang)
    {
        $detailSarpras = DetailSarpras::where('sarpras_id', $sarpras_id)
            ->where('jenis_ruang', $jenis_ruang)
            ->first(); // Mengambil satu data, bukan koleksi

        if (!$detailSarpras) {
            return back()->with('error', 'Data tidak ditemukan');
        }

        // Tidak perlu explode, asumsikan foto sudah dalam bentuk array
        return view('pages.detail-sarpras', [
            'detailSarpras' => $detailSarpras,
            'jenis_ruang' => $jenis_ruang
        ]);
    }
}
