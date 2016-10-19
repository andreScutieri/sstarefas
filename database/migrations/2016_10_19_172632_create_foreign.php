<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function(Blueprint $table) {
            $table->foreign('creator_id')->references('id')->on('users')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });

        Schema::table('tasks', function(Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('projects')
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
        Schema::table('tasks', function(Blueprint $table) {
            $table->dropForeign('tasks_creator_id_foreign');
        });

        Schema::table('tasks', function(Blueprint $table) {
            $table->dropForeign('tasks_project_id_foreign');
        });
    }
}
