<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamber extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function type_chamber()
    {
        return $this->belongsTo(TypeChamber::class, 'fk_Chamber_Type');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comment()
    {
        return $this->hasMany(Comment::class, 'fk_Chambers_Comments');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pictures()
    {
        return $this->belongsTo(Picture::class, 'fk_Pictures_Chambers');
    }
}
