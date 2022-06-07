<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function photo()
    {
        return $this->hasMany(Photo::class );
    }

    public function main_photo()
    {
        return $this->hasOne(Photo::class );
    }
}
