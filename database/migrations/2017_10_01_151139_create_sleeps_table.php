<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSleepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sleeps', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->date('date');
            $table->unsignedTinyInteger('energyAtNight')->default(0);
            $table->boolean('anxietyLevel')->default(0);
            $table->unsignedTinyInteger('timesAwaken')->default(0);
            $table->unsignedTinyInteger('energyInMorning')->default(0);
            $table->text('dreams')->nullable();
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
        Schema::dropIfExists('sleeps');
    }
}
