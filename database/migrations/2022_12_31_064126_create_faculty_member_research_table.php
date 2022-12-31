<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyMemberResearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_member_research', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->string('title');
            $table->string('source_of_fund')->nullable();
            $table->date('form_date')->nullable();
            $table->date('to_date')->nullable();
            $table->integer('faculty_member_id');
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
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
        Schema::dropIfExists('faculty_member_research');
    }
}
