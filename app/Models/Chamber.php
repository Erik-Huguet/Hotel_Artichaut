<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chamber extends Model
{
    use HasFactory;




    public function type_chamber()
    {
        return $this->hasMany(type_chamber::class, 'fk_type_Chamber');
    }
}
