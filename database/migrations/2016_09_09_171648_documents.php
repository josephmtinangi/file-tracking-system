<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Documents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reason');
            $table->integer('document_title_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->foreign('document_title_id')->references('id')
            ->on('document_titles')->onUpdate('cascade');
            $table->foreign('student_id')->references('id')
            ->on('users')->onUpdate('cascade'); 
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
        //
    }
}
