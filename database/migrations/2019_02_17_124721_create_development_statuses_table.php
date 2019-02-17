<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopmentStatusesTable extends Migration
{
    public function up()
    {
      Schema::create('development_statuses', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title', 191);
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('development_statuses');
    }
}
