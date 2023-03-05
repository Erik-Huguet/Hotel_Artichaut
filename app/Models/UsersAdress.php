<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersAdress extends Model
{
    use HasFactory;
    protected $fillable = [
        'fk_User',
        'fk_Address',
    ];


    public function user()
    {
        return $this->belongsToMany('app/Models/User');
    }

    public function address()
    {
        return $this->belongsToMany('app/Models/AddressUser');
    }
}
