<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Files extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function(Blueprint $table) {
            $table->increments('id');
            $table->string('filename');
            $table->integer('uploader_id')->unsigned();
            $table->integer('task_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('files', function(Blueprint $table) {
            $table->foreign('uploader_id')->references('id')->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });

        Schema::table('files', function(Blueprint $table) {
            $table->foreign('task_id')->references('id')->on('tasks')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('files', function(Blueprint $table) {
            $table->dropForeign('files_uploader_id_foreign');
        });

        Schema::table('files', function(Blueprint $table) {
            $table->dropForeign('files_task_id_foreign');
        });

        Schema::drop('files');
    }
}
