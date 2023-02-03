<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class picture extends Model
{
    use HasFactory;


    public function news()
    {
        return $this->hasMany(news::class, 'fk_Picture_News');
    }

    public function chamber()
    {
        return $this->hasMany(chamber::class, 'fk_Picture_Chambers');
    }

    public function discount()
    {
        return $this->hasMany(discount::class, 'fk_Picture_Discount');
    }

    public function advantages()
    {
        return $this->hasMany(advantage::class, 'fk_Picture_Advantage');
    }
}
