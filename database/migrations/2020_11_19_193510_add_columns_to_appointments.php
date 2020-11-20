<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToAppointments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('timings');
            $table->dropColumn('email');
            $table->string('college_id');
            $table->string('department');
            $table->string('gender');
            $table->string('appointment_type');
            $table->string('faculty_advisor')->nullable();
            $table->string('counsellor_name');
            $table->date('date');
            $table->integer('slot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            //
        });
    }
}
