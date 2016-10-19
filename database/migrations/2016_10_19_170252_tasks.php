<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('text')->nullable();
            $table->string('description')->nullable();
            $table->integer('creator_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->boolean('completed')->default(false);
            $table->boolean('needs_file')->default(false);
            $table->timestamps();
            $table->timestamp('completed_at')->nullable();
            $table->timestamp('deadline_at')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('tasks');
    }
}
