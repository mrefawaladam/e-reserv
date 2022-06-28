<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class,'id','transaction_id');
    }

    public function table()
    {
        return $this->hasOne(Table::class,'id','table_id');
    }
}
