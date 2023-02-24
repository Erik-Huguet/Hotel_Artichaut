<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = [
        'url_picture',
        'fk_Pictures_Advantages',
        'fk_Pictures_Chambers',
        'fk_Pictures_Discounts',
        'fk_Pictures_News' ,

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news()
    {
        return $this->hasMany(News::class, 'fk_Pictures_News');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chambers()
    {
        return $this->hasMany(Chamber::class, 'fk_Pictures_Chambers');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function discounts()
    {
        return $this->hasMany(Discount::class, 'fk_Pictures_Discounts');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function advantage()
    {
        return $this->hasMany(Advantage::class, 'fk_Pictures_Advantages');
    }
}
