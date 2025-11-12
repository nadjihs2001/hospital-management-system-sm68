<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\Policlinic;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('WebSite.index');
    }

    public function about()
    {
        return view('WebSite.about');
    }

    public function services()
    {
        return view('WebSite.services');
    }

    public function structures()
    {
        $policlinics = Policlinic::all();
        return view('WebSite.structures', compact('policlinics'));
    }

    public function news()
    {
        return view('WebSite.news');
    }
}
