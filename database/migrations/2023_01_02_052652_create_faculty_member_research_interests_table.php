<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyMemberResearchInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_member_research_interests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faculty_member_id');
            $table->text('subject');
            $table->text('description')->nullable();
            $table->text('rechach_interest_target_goal')->nullable();
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
        Schema::dropIfExists('faculty_member_research_interests');
    }
}
