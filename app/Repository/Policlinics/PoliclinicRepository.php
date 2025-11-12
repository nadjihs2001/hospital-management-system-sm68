<?php
namespace App\Repository\Policlinics;

use App\Interfaces\Policlinics\PoliclinicRepositoryInterface;
use App\Models\Doctor;
use App\Models\Policlinic;

class PoliclinicRepository implements PoliclinicRepositoryInterface
{

    public function index()
    {
      $policlinics = Policlinic::all();
      return view('Dashboard.Policlinics.index',compact('policlinics'));
    }

    public function store($request)
    {
        Policlinic::create([
            'name' => $request->input('name'),
        ]);

        session()->flash('add');
        return redirect()->route('Policlinics.index');
    }

    public function update($request)
    {
        $policlinic = Policlinic::findOrFail($request->id);
        $policlinic->update([
            'name' => $request->input('name'),
        ]);
        session()->flash('edit');
        return redirect()->route('Policlinics.index');
    }


    public function destroy($request)
    {
        Policlinic::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('Policlinics.index');
    }

    public function show($id)
    {
        $doctors = Policlinic::findOrFail($id)->doctors;
        $policlinic = Policlinic::findOrFail($id);
        return view('Dashboard.Policlinics.show_doctors',compact('doctors','policlinic'));
    }

}
