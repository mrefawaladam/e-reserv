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

    // random number functions
    public static function getNumberRandom($column){
        $min = 1000000000;$max = 9999999999;
        $rand = 'QR'.mt_rand($min, $max);
        $getnumber = Table::where($column ,'=', $rand)->get();
        if(count($getnumber) > 0){ 
            return getNumberRandom($column);
        }
        else{
            return $rand;
        }
        
    } 

}
 