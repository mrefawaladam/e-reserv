<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = ['file_path','menu_id'];
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
