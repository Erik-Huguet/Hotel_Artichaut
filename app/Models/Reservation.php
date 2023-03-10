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
        'nb_Chamber',
        'nb_TotalServices',
        'fk_Reservations_Discounts',
        ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function service() {
        return $this->belongsToMany(Services::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function chamber(){
        return $this->belongsToMany(Chamber::class);
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
        return $this->belongsToMany(User::class);
    }
}
