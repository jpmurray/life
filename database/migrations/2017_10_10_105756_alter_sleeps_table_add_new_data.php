<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSleepsTableAddNewData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sleeps', function ($table) {
            $table->boolean('hadAlcool')->default(0)->after('energyInMorning');
            $table->boolean('tookAnxieryPill')->default(0)->after('hadAlcool');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sleeps', function ($table) {
            $table->dropColumn('hadAlcool');
            $table->dropColumn('tookAnxieryPill');
        });
    }
}
