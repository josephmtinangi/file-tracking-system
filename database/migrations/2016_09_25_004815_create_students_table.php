<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('regno')->index();
            $table->integer('user_id')->unsigned();
            $table->integer('program_id')->unsigned();
            $table->integer('yearofstudy')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('program_id')->references('id')->on('programs')->onUpdate('cascade');
            $table->foreign('yearofstudy')->references('id')->on('yearofstudy_semesters')
                ->onUpdate('cascade');
            $table->primary('regno');
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
        Schema::dropIfExists('students');
    }
}
