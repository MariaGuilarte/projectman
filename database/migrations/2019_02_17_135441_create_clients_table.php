<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    public function up()
    {
      Schema::create('clients', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name', 191);
        $table->text('email');
        $table->string('phone', 191);
        $table->string('skype', 191);
        $table->unsignedInteger('payment_method_id');
        $table->foreign('payment_method_id')->references('id')->on('payment_methods');
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('clients');
    }
}
