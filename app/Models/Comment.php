<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=[
        'title_fr_comment' ,
        'discribe_fr_comment',
        'title_ang_comment' ,
        'discribe_ang_comment',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'fk_Users_Comments');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function chambers()
    {
        return $this->belongsTo(Chamber::class, 'fk_Chambers_Comments');
    }
}
