<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Sections\PoliclinicRepositoryInterface;
use Illuminate\Http\Request;

class PoliclinicController extends Controller
{

    private $Policlinics;

    public function __construct(PoliclinicRepositoryInterface $Policlinics)
    {
        $this->Policlinics = $Policlinics;
    }

    public function index()
    {
      return  $this->Policlinics->index();

    }

    public function show($id)
    {
       return $this->Policlinics->show($id);
    }


    public function store(Request $request)
    {
        return $this->Policlinics->store($request);
    }


    public function update(Request $request)
    {
        return $this->Policlinics->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->Policlinics->destroy($request);
    }
}
