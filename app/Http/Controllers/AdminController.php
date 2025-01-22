<?php

namespace App\Http\Controllers;

use App\Models\Korwil;
use App\Models\KibType;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $korwils = Korwil::all();
        $kibTypes = KibType::with('detailKibs')->get();
        
        return view('pages.adminhome', compact('korwils', 'kibTypes'));
    }
}