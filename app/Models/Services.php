<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'numberPerson',
        'numberWeek',
    ];
    public function reservation() {
        return $this->belongsToMany('app/Models/Reservation');
    }
}
