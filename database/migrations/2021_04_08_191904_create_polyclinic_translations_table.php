<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolyclinicTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polyclinic_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->longText('description');
            // Foreign key to the main model
            $table->unique(['polyclinic_id', 'locale']);
            $table->foreignId('polyclinic_id')->references('id')->on('polyclinics')->onDelete('cascade');

            // fields you want to translate
            $table->string('name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polyclinic_translations');
    }
}
