<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'barcode',
    ];

    public static function getNumberRandom($kolom){
        $min = 1000000000;$max = 9999999999;
        $rand = 'QR'.mt_rand($min, $max);
        $getnumber = Table::where($kolom ,'=', $rand)->get();
        if(count($getnumber) > 0){ 
            return getNumberRandom($kolom);
        }
        else{
            return $rand;
        }
        
    } 

}
 