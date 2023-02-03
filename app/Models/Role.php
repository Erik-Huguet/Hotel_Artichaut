<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function user()
    {
        return $this->hasMany(User::class, 'fk_Users_Roles');
    }
}
