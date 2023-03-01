<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    use HasFactory;

    protected $fillable = [

            'title_fr_adv' ,
            'describe_fr_adv' ,
            'title_ang_adv' ,
            'describe_ang_adv' ,
            'icon_adv',
            'position_icon',
            'fk_Users_Avantages',
        ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'fk_Users_Advantages');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function picture()
    {
        return $this->belongsTo(Picture::class, 'fk_Pictures_Advantages');
    }
}
