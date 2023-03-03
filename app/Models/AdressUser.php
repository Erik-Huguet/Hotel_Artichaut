<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdressUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'postalCode',
        'city',
        'country',
    ];

    public function user()
    {
        return $this->belongsToMany('app/Models/User');
    }
}
