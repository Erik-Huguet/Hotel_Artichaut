<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeChamber extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'type_chamber',
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
