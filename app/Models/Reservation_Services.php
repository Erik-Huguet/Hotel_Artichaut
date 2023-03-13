<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation_Services extends Model
{
    use HasFactory;

    protected $fillable =[
        'numberDays',
        'numberPerson',
        'numberWeek',
        'fk_Reservations',
        'fk_Services',
    ];
    public function reservation(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Reservation::class, 'reservations');    }


    public function service(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Services::class, 'services');    }

}

