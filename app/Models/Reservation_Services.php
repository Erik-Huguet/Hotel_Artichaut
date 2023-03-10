<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation_Services extends Model
{
    use HasFactory;

    protected $fillable =[
        'fk_Reservations',
        'fk_Services',
        'numberDays',
        'numberPerson',
        'numberWeek',
    ];


    public function service() {
        return $this->belongsToMany('app/Models/Services');
    }

    public function reservation() {
        return $this->belongsToMany('app/Models/Reservation');
    }
}

