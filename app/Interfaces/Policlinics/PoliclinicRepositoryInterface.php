<?php
namespace App\Interfaces\Policlinics;


interface PoliclinicRepositoryInterface
{

    // get All Policlinics
    public function index();

    // store Policlinics
    public function store($request);

    // Update Policlinics
    public function update($request);

    // destroy Policlinics
    public function destroy($request);

    // destroy Policlinics
    public function show($id);

}
