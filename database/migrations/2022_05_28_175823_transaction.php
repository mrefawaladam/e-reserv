<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->timestamps();
            $table->foreignId('user_id');
            $table->foreignId('payment_id');
            $table->foreignId('table_id');
=======
            $table->foreignId('user_id')->nullable(); ;
            $table->foreignId('payment_id'); 
            $table->foreignId('table_id'); 
>>>>>>> e4135c4068b93a8d185bc097d2020c55f98c9bab
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
