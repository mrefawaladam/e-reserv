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
        return $this->hasMany(TransactionDetail::class ,'transaction_id','id');
    }

    public function table()
    {
        return $this->hasOne(Table::class,'id','table_id');
    }
    public function payment()
    {
        return $this->hasOne(Payment::class,'id','payment_id');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
