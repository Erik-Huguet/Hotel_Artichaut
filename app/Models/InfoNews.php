<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoNews extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_fr_new',
        'describe_fr_new',
        'title_ang_new',
        'describe_ang_new',
        'icon_new',
        'position_icon_new',
        'fk_Users_News'
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'fk_Users_News');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function picture()
    {
        return $this->belongsTo(Picture::class, 'fk_Pictures_News');
    }
}
