<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentMethodsTable extends Migration
{
    public function up()
    {
      Schema::create('payment_methods', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name', 191);
        $table->string('icon_url', 191);
        $table->timestamps();
      });
    }
    
    public function down()
    {
      Schema::dropIfExists('payment_methods');
    }
}
