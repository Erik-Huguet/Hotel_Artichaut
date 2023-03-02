<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateStart',
        'dateEnd',
        'nb_Person',
        'totalServices',
        'fk_Reservations_Discounts ',
        'fk_Chambers',
        ];
    public function Service() {
        return $this->belongsToMany('App/models/Services');
    }

    public function Chamber(){
        return $this->belongsToMany('App/models/Chamber');
    }

    public function Discount(){
        return $this->hasMany('App/models/Discount');
    }
}
