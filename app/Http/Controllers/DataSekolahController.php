<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\Korwil;
use Illuminate\Http\Request;

class DataSekolahController extends Controller
{
    // Index method for listing schools based on korwil
    public function index(Request $request, Korwil $korwil)
    {
        // Build base query with eager loading for performance
        $query = Sekolah::query()->with('korwil');

        // Handle search if present
        if ($request->filled('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        // Determine data to show based on korwil
        switch ($korwil->id) {
            case 1: // Korwil TK
                $query->where('jenis', 'TK');
                $title = 'DAFTAR TK';
                break;
            case 2: // Korwil SMP
                $query->where('jenis', 'SMP');
                $title = 'DAFTAR SMP';
                break;
            default: // Regional Korwil (SD)
                $query->where([
                    ['korwil_id', $korwil->id],
                    ['jenis', 'SD']
                ]);
                $title = null;
        }

        // Get paginated results with per_page handling
        $sekolahs = $query->paginate($request->get('per_page', 10))
                         ->withQueryString();

        return view('pages.list-sekolah', compact('korwil', 'sekolahs', 'title'));
    }

    // Show method to display the detail page for a specific sekolah
    public function show(Korwil $korwil, Sekolah $sekolah)
    {
        // Validate that the sekolah matches the korwil based on jenis
        $isValid = match ($korwil->id) {
            1 => $sekolah->jenis === 'TK',
            2 => $sekolah->jenis === 'SMP',
            default => $sekolah->korwil_id === $korwil->id && $sekolah->jenis === 'SD',
        };

        if (!$isValid) {
            abort(404);
        }

        // Get search and per_page values from the query parameters
        $search = request()->query('search');
        $perPage = request()->query('per_page', 10);

        // Fetch the list of schools related to the current korwil
        $sekolahs = Sekolah::where('korwil_id', $korwil->id)
            ->when($search, function ($query) use ($search) {
                return $query->where('nama', 'like', "%{$search}%");
            })
            ->paginate($perPage);

        // Set the title for the page
        $title = 'Data Sekolah ' . $korwil->nama;

        // Return the view with data
        return view('pages.sekolah-sarpras', compact('korwil', 'sekolah', 'sekolahs', 'search', 'title'));
    }
}
