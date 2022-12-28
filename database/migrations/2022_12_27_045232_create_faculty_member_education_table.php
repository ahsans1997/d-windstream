<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyMemberEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_member_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faculty_member_id');
            $table->text('degree_name');
            $table->text('subject');
            $table->text('board_or_institute');
            $table->foreignId('country_id');
            $table->text('passing_year');
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
        Schema::dropIfExists('faculty_member_education');
    }
}
