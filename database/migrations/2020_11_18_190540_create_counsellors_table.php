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
                $table->string('email');
                $table->text('qualification');
                $table->text('bio');
                $table->text('achievements');
                $table->timestamps();
                $table->mediumText('image1')->nullable();
                $table->mediumText('image2')->nullable();
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
