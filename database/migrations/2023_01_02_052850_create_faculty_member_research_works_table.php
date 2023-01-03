<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyMemberResearchWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_member_research_works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faculty_member_id');
            $table->text('subject');
            $table->text('project_name');
            $table->text('source_of_funding');
            $table->text('from_date');
            $table->text('to_date')->nullable();
            $table->text('collaboration')->nullable();
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
        Schema::dropIfExists('faculty_member_research_works');
    }
}
