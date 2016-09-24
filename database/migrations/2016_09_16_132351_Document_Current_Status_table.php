<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocumentCurrentStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Document_Current_Status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->integer('document_id')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->foreign('staff_id')->references('id')->on('users')
                ->onUpdate('cascade');
            $table->foreign('document_id')->references('docid') ->on('documents')->onUpdate('cascade');
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
        Schema::dropIfExists('Document_Current_Status');
    }
}
