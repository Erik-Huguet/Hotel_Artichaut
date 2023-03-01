<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_fr_comment',
        'describe_fr_comment',
        'title_ang_comment',
        'describe_ang_comment',
        'rating',
        'fk_Users_Comments',
        'fk_Chambers_Comments',
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
    public function chamber()
    {
        return $this->belongsTo(Chamber::class, 'fk_Chambers_Comments');
    }
}
