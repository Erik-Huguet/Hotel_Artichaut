<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'addressHotel',
        'NomHotel',
        'logoHotel',
        'emailHotel',
        'telephoneHotel',
        'urlFooter',
        'fk_Footer_Users'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
