<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'registration_number',
        'tel',
        'email',
        'province',
        'address',
        'logo',
    ];

    public function athletes(){
        return $this->belongsToMany(Athlete::class);
    }

    public function management(){
        return $this->belongsToMany(ClubManagement::class)->withPivot('type', 'start_date', 'end_date');
    }

    public function managementByType($type){
        return $this->management()->where('type', $type)->whereNull('end_date')->get();
    }

    public function hasManagement($type, $id){
        return $this->management()->where('club_management_id', $id)->where('type', $type)->whereNull('end_date')->first();
    }

    public function coach(){
        return $this->hasOne(Coach::class);
    }
}