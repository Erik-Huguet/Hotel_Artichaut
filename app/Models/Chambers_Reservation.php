<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambers_Reservation extends Model
{
    use HasFactory;

    public $fillable = [
        'fk_Reservations',
        'fk_Chambers',
    ];
    public function chamber() {
        return $this->belongsToMany('app/Models/Chambers');
    }

    public function reservation() {
        return $this->belongsToMany('app/Models/Reservation');
    }
}
