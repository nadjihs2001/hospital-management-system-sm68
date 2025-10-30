<?php

namespace App\Http\Livewire\Appointments;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Polyclinic;
use Livewire\Component;

class Create extends Component
{
    public $doctors;
    public $sections;
    public $doctor;
    public $section;
    public $name;
    public $email;
    public $phone;
    public $notes;
    public $message= false;

    public function mount(){

      $this->sections = Polyclinic::get();
      $this->doctors = collect();

    }

    public function render()
    {
        return view('livewire.appointments.create',
            [
                'sections' => Polyclinic::get()
            ]);
    }

    public function updatedSection($section_id){

       $this->doctors = Doctor::where('polyclinic_id',$section_id)->get();
    }

    public function store(){

        $appointments = new Appointment();
        $appointments->doctor_id = $this->doctor;
        $appointments->section_id = $this->section;
        $appointments->name = $this->name;
        $appointments->email = $this->email;
        $appointments->phone = $this->phone;
        $appointments->notes = $this->notes;
        $appointments->save();
        $this->message =true;

    }



}
