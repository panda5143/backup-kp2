<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\Korwil;
use App\Models\Kib;
use App\Models\KibType;
use Illuminate\Http\Request;

class KorwilController extends Controller
{
    public function index()
    {
        $korwils = Korwil::all();
        return view('pages.data-sekolah', compact('korwils'));
    }

    public function listSekolah(Korwil $korwil)
    {
        return view('pages.list-sekolah', compact('korwil'));
    }

    public function list(Request $request, Korwil $korwil)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $sekolahs = $korwil->sekolahs()
            ->when($search, function ($query) use ($search) {
                return $query->where('nama', 'like', "%{$search}%");
            })
            ->orderBy('nama')
            ->paginate($perPage);

        $title = strtoupper($korwil->nama);
        
        return view('pages.list-sekolah', compact('korwil', 'sekolahs', 'search'));
    }

    public function sarpras(Request $request, Korwil $korwil)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $sekolahs = $korwil->sekolahs()
            ->when($search, function ($query) use ($search) {
                return $query->where('nama', 'like', "%{$search}%");
            })
            ->orderBy('nama')
            ->paginate($perPage);

        $title = strtoupper($korwil->nama);
        
        return view('pages.sarpras', compact('korwil', 'sekolahs', 'search', 'title'));
    }
}