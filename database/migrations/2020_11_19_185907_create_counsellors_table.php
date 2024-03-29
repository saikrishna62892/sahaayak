<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounsellorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counsellors', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('college_id');
                $table->string('email');
                $table->string('calendar_url');
                $table->text('profession');
                $table->text('bio')->nullable();
                $table->text('achievements')->nullable();
                $table->mediumText('image')->nullable();
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
        Schema::dropIfExists('counsellors');
    }
}
