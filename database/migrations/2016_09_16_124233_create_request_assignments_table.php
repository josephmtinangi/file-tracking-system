<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_assignments', function (Blueprint $table) {
            $table->increments('Assid');
            $table->integer('rid')->unsigned();;
            $table->integer('sid')->unsigned();;
            $table->timestamps();
            $table->foreign('rid')->references('rid')
                ->on('requests')->onUpdate('cascade');
            $table->foreign('sid')->references('sid')
                ->on('selections')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_assignments');
    }
}
