<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table-> string('name', 50);
           
            //$table-> date('date');
            $table-> integer('status');
            $table-> string('img1',100);
            $table->string ('description');

           // $table->foreignId('caja_id');
           // $table->foreignId('user_id');
          //  $table->foreignId('detail_id');
            $table->foreignId('table_id');

          //  $table->foreign('caja_id')->references('id')->on('cajas');
          //  $table->foreign('user_id')->references('id')->on('users');
           // $table->foreign('detail_id')->references('id')->on('details');
            $table->foreign('table_id')->references('id')->on('tables');

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
        Schema::dropIfExists('orders');
    }
};
