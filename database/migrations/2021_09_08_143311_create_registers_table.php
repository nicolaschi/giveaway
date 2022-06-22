<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('day');
            $table->string('month');
            $table->string('year');
            $table->string('email')->nullable()->unique();
            $table->string('lga');
            $table->string('address');
            $table->string('phone_number')->unique();
            $table->string('gender');
            $table->string('status');
            $table->string('work');
            $table->string('nin');
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
        Schema::dropIfExists('registers');
    }
}
