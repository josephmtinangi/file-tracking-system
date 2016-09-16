<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('documents', function (Blueprint $table) {
            $table->increments('docid');
            $table->integer('student_id')->unsigned();
            $table->integer('Assignment_id')->unsigned();
            $table->text('reason');
            $table->timestamps();
            $table->foreign('student_id')->references('id')
                ->on('users')->onUpdate('cascade');
            $table->foreign('Assignment_id')->references('Assid')
                ->on('request_assignments')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
