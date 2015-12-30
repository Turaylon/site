<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('slug');
            $table->boolean('is_closed');

            $table->timestamps();
        });

        Schema::create('tag_thread', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('tag_id')->unsigned();
            $table->integer('thread_id')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('threads');
        Schema::drop('tag_thread');
    }
}