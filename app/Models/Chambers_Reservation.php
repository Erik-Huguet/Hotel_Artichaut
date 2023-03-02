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
    public function Chambers() {
        return $this->belongsToMany('App/models/Chambers');
    }

    public function Reservation() {
        return $this->belongsToMany('App/models/Reservation');
    }
}
