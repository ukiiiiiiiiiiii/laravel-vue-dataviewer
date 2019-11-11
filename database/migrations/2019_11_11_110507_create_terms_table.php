<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country');
            $table->string('national_term');
            $table->string('english_term');
            $table->text('national_definition');
            $table->text('english_definition');
            $table->string('english_document');
            $table->string('national_document');
            $table->integer('year');
            $table->text('national_document_link');
            $table->text('english_document_link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terms');
    }
}
