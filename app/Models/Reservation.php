<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateStart',
        'dateEnd',
        'nb_Person',
        'totalServices',
        'fk_Reservations_Discounts ',
        'fk_Chambers',
        ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function service() {
        return $this->belongsToMany('app/Models/Services');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function chamber(){
        return $this->belongsToMany('app/Models/Chamber');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function discount(){
        return $this->hasMany(Discount::class, 'fk_Reservation_Discount');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user(){
        return $this->belongsToMany('app/Models/User');
    }
}
