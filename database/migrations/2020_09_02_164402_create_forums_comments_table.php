<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('forum_id');
            $table->foreignId('comment_id');
            $table->timestamps();
            //fk
            $table->foreign('forum_id')->references('id')->on('forums');
            $table->foreign('comment_id')->references('id')->on('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forums_comments');
    }
}
