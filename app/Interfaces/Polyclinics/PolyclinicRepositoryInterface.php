<?php
namespace App\Interfaces\Polyclinics;


interface PolyclinicRepositoryInterface
{

    // get All Polyclinics
    public function index();

    // store Polyclinics
    public function store($request);

    // Update Polyclinics
    public function update($request);

    // destroy Polyclinics
    public function destroy($request);

    // show Polyclinics
    public function show($id);

}
