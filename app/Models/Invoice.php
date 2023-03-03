<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//commit
class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'number_invoices',
        'fk_User',
        'fk_Reservation',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reservation() {
        return $this->belongsToMany('app/Models/Reservation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user(){
        return $this->belongsToMany('app/Models/User');
    }
}
