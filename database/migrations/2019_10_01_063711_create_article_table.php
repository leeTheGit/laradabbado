<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->uuid('id');

            $table->string('external_string_id')->nullable();
            $table->integer('external_id')->nullable();

            $table->string('title');
            $table->string('excerpt');
            $table->text('content');

            $table->string('keywords')->nullable();
            $table->string('slug');
            $table->string('url');
            $table->string('canonical_url');
            $table->string('type');
            $table->enum('status', ['draft', 'published']);
            $table->uuid('user_id');

            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_title')->nullable();
            
            $table->string('opengraph_title')->nullable();
            $table->string('opengraph_description')->nullable();
            $table->uuid('opengraph_media_id')->nullable();
            
            $table->string('twitter_title')->nullable();
            $table->string('twitter_description')->nullable();
            $table->uuid('twitter_media_id')->nullable();



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
        Schema::dropIfExists('article');
    }
}
