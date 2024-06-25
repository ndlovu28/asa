<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubManagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_number',
        'name',
        'surname',
        'contact_number',
        'email'
    ];
}
