<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['name','appointments'];
    public $fillable= ['email','email_verified_at','password','phone','name','policlinic_id','status','number_of_statements'];
    //protected $guarded=[];

    /**
     * Get the Doctor's image.
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    // One To One get policlinic of Doctor
    public function policlinic()
    {
        return $this->belongsTo(Policlinic::class);
    }

    public function doctorappointments()
    {
        return $this->belongsToMany(Appointment::class,'appointment_doctor');
    }


}
