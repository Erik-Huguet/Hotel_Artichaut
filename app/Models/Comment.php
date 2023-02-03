<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany(user::class, 'fk_Comments_Users');
    }

    public function chamber()
    {
        return $this->hasMany(chamber::class, 'fk_Comments_Chambers');
    }
}
