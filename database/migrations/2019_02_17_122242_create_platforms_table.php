<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatformsTable extends Migration
{
    public function up()
    {
      Schema::create('platforms', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title', 191);
        $table->string('description', 191);
        $table->string('icon', 191);
        $table->string('icon_url', 191);
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('platforms');
    }
}
