<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class advantages extends Model
{
    use HasFactory;




    public function user()
    {
        return $this->hasMany(user::class, 'fk_Advantage_Users');
    }
}