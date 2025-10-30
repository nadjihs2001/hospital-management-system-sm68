<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\Polyclinic;
use Illuminate\Http\Request;

class PolyclinicController extends Controller
{
    /**
     * Display a listing of polyclinics.
     */
    public function index()
    {
        $polyclinics = Polyclinic::all();
        return view('WebSite.polyclinics', compact('polyclinics'));
    }

    /**
     * Display the specified polyclinic.
     */
    public function show($id)
    {
        $polyclinic = Polyclinic::with('doctors')->findOrFail($id);
        return view('WebSite.polyclinic-details', compact('polyclinic'));
    }
}

