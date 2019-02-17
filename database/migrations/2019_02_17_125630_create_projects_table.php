<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
      Schema::create('projects', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title', 191);
        $table->text('description');
        $table->unsignedInteger('platform_id');
        $table->foreign('platform_id')->references('id')->on('platforms');
        $table->unsignedInteger('development_status_id');
        $table->foreign('development_status_id')->references('id')->on('development_statuses');
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('projects');
    }
}
