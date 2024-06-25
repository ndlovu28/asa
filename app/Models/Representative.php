<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'other_names',
        'preferred_name',
        'id_number',
        'work_contact_number',
        'home_contact_number',
        'mobile_contact_number',
        'email',
        'dob',
    ];

    public function athletes(){
        return $this->belongsToMany(Athlete::class);
    }
}
