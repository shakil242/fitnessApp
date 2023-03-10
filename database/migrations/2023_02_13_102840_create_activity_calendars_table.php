<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_calendars', function (Blueprint $table) {
            $table->id();
            $table->date('calendar_date');
            $table->date('end_date')->nullable();
            $table->json('workout_id')->nullable();
            $table->json('activity_id')->nullable();
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
        Schema::dropIfExists('activity_calendars');
    }
};
