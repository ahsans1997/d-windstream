<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyMemberExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_member_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faculty_member_id');
            $table->text('titel');
            $table->text('organization');
            $table->text('location');
            $table->text('from_date');
            $table->text('to_date');
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
        Schema::dropIfExists('faculty_member_experiences');
    }
}
