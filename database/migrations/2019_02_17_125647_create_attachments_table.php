<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    public function up()
    {
      Schema::create('attachments', function (Blueprint $table) {
        $table->increments('id');
        $table->string('filename', 191);
        $table->unsignedInteger('project_id');
        $table->foreign('project_id')->references('id')->on('projects');
        $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('attachments');
    }
}
