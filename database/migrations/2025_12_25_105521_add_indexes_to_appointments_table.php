<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("appointments", function (Blueprint $table) {
            $table->index("appointment");
            $table->index("type");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("appointments", function (Blueprint $table) {
            $table->dropIndex(["appointment"]);
            $table->dropIndex(["type"]);
        });
    }
}
