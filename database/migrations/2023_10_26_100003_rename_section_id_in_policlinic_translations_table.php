<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameSectionIdInPoliclinicTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('policlinic_translations', function (Blueprint $table) {
            $table->renameColumn('section_id', 'policlinic_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('policlinic_translations', function (Blueprint $table) {
            $table->renameColumn('policlinic_id', 'section_id');
        });
    }
}
