<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'number_invoices',
        'fk_User',
        'fk_Reservation',
    ];

    public function Reservation() {
        return $this->belongsToMany('App/models/Reservation');
        }

    public function User(){
        return $this->belongsToMany('App/models/User');
        }
}
