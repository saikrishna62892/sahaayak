<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('email',100);
            $table->text('phone',10);
            $table->text('timings');
            $table->text('message');
            $table->boolean('is_Completed')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('volunteer_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('volunteer_id')->references('id')->on('volunteers')->onDelete('cascade');
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
        Schema::dropIfExists('table_appointments');
    }
}
