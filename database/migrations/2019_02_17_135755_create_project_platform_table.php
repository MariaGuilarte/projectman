<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectPlatformTable extends Migration
{
    public function up()
    {
      Schema::create('project_platform', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('project_id');
        $table->foreign('project_id')->references('id')->on('projects');
        $table->unsignedInteger('platform_id');
        $table->foreign('platform_id')->references('id')->on('platforms');
        $table->timestamps();
      });
    }
    
    public function down()
    {
        Schema::dropIfExists('project_platform');
    }
}
