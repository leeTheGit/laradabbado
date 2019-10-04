<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('title')->nullable();
            $table->string('caption')->nullable();
            $table->string('description')->nullable();
            $table->string('filepath');
            $table->string('filename');
            $table->string('filesize');
            $table->string('filetype');
            $table->string('tags')->nullable();
            $table->integer('width');
            $table->integer('height');
            $table->string('url');
            $table->string('type');
            
            $table->uuid('user_id');
            
            $table->timestamps();
            $table->primary('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
