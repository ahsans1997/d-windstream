<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->integer('department_id');
            $table->string('location');
            $table->string('venue');
            $table->string('organisation');
            $table->integer('organisation_contact');
            $table->string('map');
            $table->integer('price')->nullable();
            $table->dateTime('registration_start');
            $table->dateTime('registration_end');
            $table->integer('maximum_sit');
            $table->dateTime('datetime');
            $table->string('slug');
            $table->string('image')->default('default.png');
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
        Schema::dropIfExists('events');
    }
}
