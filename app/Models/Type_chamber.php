<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_chamber extends Model
{
    use HasFactory;


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chambers()
    {
        return $this->hasMany(Chamber::class, 'fk_Chamber_Type');
    }
}
