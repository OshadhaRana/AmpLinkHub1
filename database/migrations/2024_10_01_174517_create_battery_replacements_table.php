<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatteryReplacementsTable extends Migration
{
    public function up()
    {
        Schema::create('battery_replacements', function (Blueprint $table) {
            // Primary key
            $table->id('battery_replace_id');

            // Foreign key linking to the users table (assuming a users table exists)
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Date and time of battery replacement
            $table->dateTime('replacement_date');

            // Timestamps for record creation and updates
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('battery_replacements');
    }
}
