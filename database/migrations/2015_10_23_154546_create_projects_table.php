<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id', false, true);
            $table->foreign('owner_id')->references('id')->on('users');
            $table->integer('client_id', false, true);
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('name');
            $table->text('description');
            $table->float('progress')->default(0.00);
            $table->string('status');
            $table->timestamp('due_date');
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
        Schema::drop('projects');
    }
}
