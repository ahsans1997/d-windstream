<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyMemberResearchProjectSupervsionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_member_research_project_supervsions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faculty_member_id');
            $table->text('level_of_study');
            $table->text('title');
            $table->text('supervisor');
            $table->text('co_supervisor')->nullable();
            $table->text('student_name');
            $table->text('area_of_research')->nullable();
            $table->text('current_completion')->nullable();
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
        Schema::dropIfExists('faculty_member_research_project_supervsions');
    }
}
