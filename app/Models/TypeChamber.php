<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeChamber extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'typeChamber',
        'price',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function chamber()
    {
        return $this->hasMany(Chamber::class, 'fk_Chambers_TypeChamber');
    }

}
