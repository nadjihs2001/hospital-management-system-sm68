<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of services.
     */
    public function index()
    {
        $services = Service::where('status', 1)->get();
        return view('WebSite.services', compact('services'));
    }

    /**
     * Display the specified service.
     */
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('WebSite.service-details', compact('service'));
    }
}

